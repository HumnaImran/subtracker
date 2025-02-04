function makeLineChart(dataset, xName, yObjs, axisLables) {
  // chartObj is the main object that is returned
  var chartObj = {};
  var color = d3.scaleOrdinal(d3.schemeCategory10);
  chartObj.xAxisLable = axisLables.xAxis;
  chartObj.yAxisLable = axisLables.yAxis;
  /*
     yObjsects format:
     {y1:{column:'',name:'name',color:'color'},y2}
     */

  // Add some values onto chartObj
  // chartObj.data = dataset;
  chartObj.margin = { top: 15, right: 60, bottom: 30, left: 50 };
  chartObj.width = 650 - chartObj.margin.left - chartObj.margin.right;
  chartObj.height = 480 - chartObj.margin.top - chartObj.margin.bottom;

  // So we can pass the x and y as strings when creating the function
  chartObj.xFunct = function (d) {
    return d[xName];
  };

  // For each yObjs argument, create a yFunction
  function getYFn(column) {
    return function (d) {
      return d[column];
    };
  }

  // Object instead of array
  chartObj.yFuncts = [];
  for (var y in yObjs) {
    yObjs[y].name = y;
    yObjs[y].yFunct = getYFn(yObjs[y].column); //Need this  list for the ymax function
    chartObj.yFuncts.push(yObjs[y].yFunct);
  }
  console.log(yObjs);

  // Formatter functions for the axes
  chartObj.formatAsNumber = d3.format(".0f");
  chartObj.formatAsDecimal = d3.format(".2f");
  chartObj.formatAsCurrency = d3.format("$.2f");
  chartObj.formatAsFloat = function (d) {
    if (d % 1 !== 0) {
      return d3.format(".2f")(d);
    } else {
      return d3.format(".0f")(d);
    }
  };

  chartObj.xFormatter = chartObj.formatAsNumber;
  chartObj.yFormatter = chartObj.formatAsFloat;

  chartObj.bisectYear = d3.bisector(chartObj.xFunct).left; //< Can be overridden in definition

  // Create scale functions
  chartObj.xScale = d3
    .scaleLinear()
    .range([0, chartObj.width])
    .domain(d3.extent(chartObj.data, chartObj.xFunct)); //< Can be overridden in definition

  // Get the max of every yFunct
  chartObj.max = function (fn) {
    return d3.max(chartObj.data, fn);
  };
  chartObj.yScale = d3
    .scaleLinear()
    .range([chartObj.height, 0])
    .domain([0, d3.max(chartObj.yFuncts.map(chartObj.max))]);

  chartObj.formatAsYear = d3.format("");

  // Create axis
  chartObj.xAxis = d3
    .axisBottom()
    .scale(chartObj.xScale)
    .tickFormat(chartObj.xFormatter);

  chartObj.yAxis = d3
    .axisLeft()
    .scale(chartObj.yScale)
    .tickFormat(chartObj.yFormatter);

  // Build line building functions
  function getYScaleFn(yObj) {
    return function (d) {
      return chartObj.yScale(yObjs[yObj].yFunct(d));
    };
  }
  for (var yObj in yObjs) {
    yObjs[yObj].line = d3
      .line()
      .x((d) => chartObj.xScale(chartObj.xFunct(d)))
      .y(getYScaleFn(yObj));
  }

  // Type the object here for some reason?
  chartObj.svg;

  // Change chart size according to window size
  chartObj.update_svg_size = function () {
    chartObj.width =
      parseInt(chartObj.chartDiv.style("width"), 10) -
      (chartObj.margin.left + chartObj.margin.right);

    chartObj.height =
      parseInt(chartObj.chartDiv.style("height"), 10) -
      (chartObj.margin.top + chartObj.margin.bottom);

    /* Update the range of the scale with new width/height */
    chartObj.xScale.range([0, chartObj.width]);
    chartObj.yScale.range([chartObj.height, 0]);

    if (!chartObj.svg) {
      return false;
    }

    /* Else Update the axis with the new scale */
    chartObj.svg
      .select(".x.axis")
      .attr("transform", "translate(0," + chartObj.height + ")")
      .call(chartObj.xAxis);
    chartObj.svg.select(".x.axis .label").attr("x", chartObj.width / 2);

    chartObj.svg.select(".y.axis").call(chartObj.yAxis);
    chartObj.svg.select(".y.axis .label").attr("x", -chartObj.height / 2);

    /* Force D3 to recalculate and update the line */
    for (var y in yObjs) {
      yObjs[y].path.attr("d", yObjs[y].line);
    }

    d3.selectAll(".focus.line").attr("y2", chartObj.height);

    chartObj.chartDiv
      .select("svg")
      .attr(
        "width",
        chartObj.width + (chartObj.margin.left + chartObj.margin.right)
      )
      .attr(
        "height",
        chartObj.height + (chartObj.margin.top + chartObj.margin.bottom)
      );

    chartObj.svg
      .select(".overlay")
      .attr("width", chartObj.width)
      .attr("height", chartObj.height);

    return chartObj;
  };
  chartObj.bind = function (selector) {
    chartObj.mainDiv = d3.select(selector);

    // Add all the divs to make it centered and responsive
    chartObj.mainDiv
      .append("div")
      .attr("class", "inner-wrapper")
      .append("div")
      .attr("class", "outer-box")
      .append("div")
      .attr("class", "inner-box");

    chartSelector = selector + " .inner-box";
    chartObj.chartDiv = d3.select(chartSelector);

    d3.select(window).on("resize." + chartSelector, chartObj.update_svg_size);

    chartObj.update_svg_size();
    return chartObj;
  };

  // Render the chart
  chartObj.render = function () {
    //Create SVG element
    chartObj.svg = chartObj.chartDiv
      .append("svg")
      .attr("class", "chart-area")
      .attr(
        "width",
        chartObj.width + (chartObj.margin.left + chartObj.margin.right)
      )
      .attr(
        "height",
        chartObj.height + (chartObj.margin.top + chartObj.margin.bottom)
      )
      .append("g")
      .attr(
        "transform",
        "translate(" + chartObj.margin.left + "," + chartObj.margin.top + ")"
      );

    // Draw Lines
    for (var y in yObjs) {
      yObjs[y].path = chartObj.svg
        .append("path")
        .datum(chartObj.data)
        .attr("class", "line")
        .attr("d", yObjs[y].line)
        // .style("stroke", color(y))
        .attr("data-series", y)
        .on("mouseover", function () {
          focus.style("display", null);
        })
        .on("mouseout", function () {
          focus.transition().delay(700).style("display", "none");
        })
        .on("mousemove", mousemove);
    }

    // Draw Axis
    chartObj.svg
      .append("g")
      .attr("class", "x axis")
      .attr("transform", "translate(0," + chartObj.height + ")")
      .call(chartObj.xAxis)
      .append("text")
      .attr("class", "label")
      .attr("x", chartObj.width / 2)
      .attr("y", 30)
      .style("text-anchor", "middle")
      .text(chartObj.xAxisLable);

    chartObj.svg
      .append("g")
      .attr("class", "y axis")
      .call(chartObj.yAxis)
      .append("text")
      .attr("class", "label")
      .attr("transform", "rotate(-90)")
      .attr("y", -42)
      .attr("x", -chartObj.height / 2)
      .attr("dy", ".71em")
      .style("text-anchor", "middle")
      .text(chartObj.yAxisLable);

    //Draw tooltips
    var focus = chartObj.svg
      .append("g")
      .attr("class", "focus")
      .style("display", "none");

    for (var y in yObjs) {
      yObjs[y].tooltip = focus.append("g");
      yObjs[y].tooltip.append("circle").attr("r", 5);
      yObjs[y].tooltip
        .append("rect")
        .attr("x", 8)
        .attr("y", "-5")
        .attr("width", 22)
        .attr("height", "0.75em");
      yObjs[y].tooltip.append("text").attr("x", 9).attr("dy", ".35em");
    }

    // Year label
    focus.append("text").attr("class", "focus year").attr("x", 9).attr("y", 7);
    // Focus line
    focus
      .append("line")
      .attr("class", "focus line")
      .attr("y1", 0)
      .attr("y2", chartObj.height);

    //Draw legend
    var legend = chartObj.mainDiv.append("div").attr("class", "legend");
    for (var y in yObjs) {
      series = legend.append("div");
      series
        .append("div")
        .attr("class", "series-marker")
        .style("background-color", color(y));
      series.append("p").text(y);
      yObjs[y].legend = series;
    }

    // Overlay to capture hover
    chartObj.svg
      .append("rect")
      .attr("class", "overlay")
      .attr("width", chartObj.width)
      .attr("height", chartObj.height)
      .on("mouseover", function () {
        focus.style("display", null);
      })
      .on("mouseout", function () {
        focus.style("display", "none");
      })
      .on("mousemove", mousemove);

    return chartObj;
    function mousemove() {
      var x0 = chartObj.xScale.invert(d3.mouse(this)[0]),
        i = chartObj.bisectYear(dataset, x0, 1),
        d0 = chartObj.data[i - 1],
        d1 = chartObj.data[i];
      try {
        var d = x0 - chartObj.xFunct(d0) > chartObj.xFunct(d1) - x0 ? d1 : d0;
      } catch (e) {
        return;
      }
      minY = chartObj.height;
      for (var y in yObjs) {
        yObjs[y].tooltip.attr(
          "transform",
          "translate(" +
            chartObj.xScale(chartObj.xFunct(d)) +
            "," +
            chartObj.yScale(yObjs[y].yFunct(d)) +
            ")"
        );
        yObjs[y].tooltip
          .select("text")
          .text(chartObj.yFormatter(yObjs[y].yFunct(d)));
        minY = Math.min(minY, chartObj.yScale(yObjs[y].yFunct(d)));
      }

      focus
        .select(".focus.line")
        .attr(
          "transform",
          "translate(" + chartObj.xScale(chartObj.xFunct(d)) + ")"
        )
        .attr("y1", minY);
      focus
        .select(".focus.year")
        .text("Year: " + chartObj.xFormatter(chartObj.xFunct(d)));
    }
  };
  console.log("chartObj");
  console.log("===========");
  console.log(chartObj);

  return chartObj;
}
var data = [
  {
    year: 1980,
    variableA: 70,
    variableB: 52,
    variableC: 145,
    variableD: 75,
  },
  {
    year: 1981,
    variableA: 77,
    variableB: 51,
    variableC: 156,
    variableD: 80,
  },
  {
    year: 1982,
    variableA: 81,
    variableB: 55,
    variableC: 169,
    variableD: 79,
  },
  {
    year: 1983,
    variableA: 78,
    variableB: 55,
    variableC: 171,
    variableD: 91,
  },
  {
    year: 1984,
    variableA: 80,
    variableB: 55,
    variableC: 187,
    variableD: 102,
  },
  {
    year: 1985,
    variableA: 79,
    variableB: 53,
    variableC: 199,
    variableD: 103,
  },
  {
    year: 1986,
    variableA: 79,
    variableB: 54,
    variableC: 204,
    variableD: 102,
  },
  {
    year: 1987,
    variableA: 78,
    variableB: 53,
    variableC: 218,
    variableD: 104,
  },
  {
    year: 1988,
    variableA: 75,
    variableB: 51,
    variableC: 232,
    variableD: 105,
  },
  {
    year: 1989,
    variableA: 78,
    variableB: 48,
    variableC: 233,
    variableD: 106,
  },
  {
    year: 1990,
    variableA: 76,
    variableB: 51,
    variableC: 233,
    variableD: 112,
  },
  {
    year: 1991,
    variableA: 73,
    variableB: 55,
    variableC: 232,
    variableD: 111,
  },
  {
    year: 1992,
    variableA: 70,
    variableB: 52,
    variableC: 240,
    variableD: 122,
  },
  {
    year: 1993,
    variableA: 69,
    variableB: 50,
    variableC: 256,
    variableD: 122,
  },
  {
    year: 1994,
    variableA: 74,
    variableB: 50,
    variableC: 273,
    variableD: 131,
  },
  {
    year: 1995,
    variableA: 71,
    variableB: 51,
    variableC: 286,
    variableD: 128,
  },
  {
    year: 1996,
    variableA: 71,
    variableB: 53,
    variableC: 283,
    variableD: 129,
  },
  {
    year: 1997,
    variableA: 76,
    variableB: 51,
    variableC: 292,
    variableD: 126,
  },
  {
    year: 1998,
    variableA: 81,
    variableB: 49,
    variableC: 298,
    variableD: 132,
  },
  {
    year: 1999,
    variableA: 80,
    variableB: 53,
    variableC: 313,
    variableD: 142,
  },
  {
    year: 2000,
    variableA: 77,
    variableB: 59,
    variableC: 321,
    variableD: 152,
  },
  {
    year: 2001,
    variableA: 82,
    variableB: 63,
    variableC: 338,
    variableD: 162,
  },
  {
    year: 2002,
    variableA: 88,
    variableB: 67,
    variableC: 337,
    variableD: 171,
  },
  {
    year: 2003,
    variableA: 90,
    variableB: 69,
    variableC: 338,
    variableD: 177,
  },
  {
    year: 2004,
    variableA: 90,
    variableB: 75,
    variableC: 338,
    variableD: 183,
  },
  {
    year: 2005,
    variableA: 92,
    variableB: 80,
    variableC: 351,
    variableD: 180,
  },
  {
    year: 2006,
    variableA: 93,
    variableB: 87,
    variableC: 367,
    variableD: 188,
  },
  {
    year: 2007,
    variableA: 91,
    variableB: 91,
    variableC: 375,
    variableD: 186,
  },
  {
    year: 2008,
    variableA: 90,
    variableB: 96,
    variableC: 374,
    variableD: 195,
  },
  {
    year: 2009,
    variableA: 97,
    variableB: 97,
    variableC: 385,
    variableD: 207,
  },
  {
    year: 2010,
    variableA: 104,
    variableB: 101,
    variableC: 401,
    variableD: 206,
  },
  {
    year: 2011,
    variableA: 111,
    variableB: 106,
    variableC: 403,
    variableD: 205,
  },
  {
    year: 2012,
    variableA: 115,
    variableB: 105,
    variableC: 417,
    variableD: 204,
  },
  {
    year: 2013,
    variableA: 117,
    variableB: 108,
    variableC: 420,
    variableD: 211,
  },
  {
    year: 2014,
    variableA: 121,
    variableB: 107,
    variableC: 436,
    variableD: 217,
  },
  {
    year: 2015,
    variableA: 121,
    variableB: 104,
    variableC: 449,
    variableD: 216,
  },
];
var chart = makeLineChart(
  data,
  "year",
  {
    "Variable A": { column: "variableA" },
    "Variable B": { column: "variableB" },
    "Variable C": { column: "variableC" },
    "Variable D": { column: "variableD" },
  },
  { xAxis: "Years", yAxis: "Amount" }
);

chart.bind("#chart-line1");
chart.render();
