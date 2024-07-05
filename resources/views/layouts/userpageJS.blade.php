
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/4.13.0/d3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script
src="https://kit.fontawesome.com/c4e7cb26f8.js"
crossorigin="anonymous"
></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script> --}}


<script src="assets/plugins/datatables/datatables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script src="assets/js/select2.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
      var ctx = document.getElementById("lineChart").getContext("2d");
      var myChart = new Chart(ctx, {
        type: "line",
        data: {
          labels: [
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
          ],
          datasets: [
            {
              label: "Entertainment",
              data: [
                50, 70, 100, 180, 200, 230, 170, 210, 270, 250, 230, 380,
              ],
              borderColor: "rgba(220, 35, 255, 1)",
              borderWidth: 1,
              fill: false, // No background fill
              pointRadius:0
            },
            {
              label: "Transportation",
              data: [
                370, 380, 385, 390, 400, 390, 410, 415, 390, 420, 410, 450,
              ],
              borderColor: "rgba(22, 141, 188, 1)",
              borderWidth: 1,
              fill: false, // No background fill
              pointRadius:0
            },
            {
              label: "Security",
              data: [
                600, 620, 630, 640, 650, 610, 655, 680, 720, 740, 770, 810,
              ],
              borderColor: "rgba(117, 138, 255, 1)",
              borderWidth: 1,
              fill: false, // No background fill
              pointRadius:0
            },
          ],
        },
        options: {
          scales: {
            x: {
              grid: {
                display: false, // Hide the x-axis grid lines
              },
            },
            y: {
              suggestedMin: 0,
              suggestedMax: 1000,
              stepSize: 200,
            },
          },
          plugins: {
            legend: {
              align:"end",
              labels: {
                usePointStyle: true, // Use a circle instead of a square
                pointStyle: "circle",
                pointStyleWidth: 20,
                boxWidth: 3,
                boxHeight: 3,
              },
            },
          },
        },
      });
    });
  </script>


<script src="{{asset('assets/js/linechart.js')}}"></script>

<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>

<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<script src="{{asset('assets/js/admin.js')}}"></script>
