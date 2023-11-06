@extends('layout.Admin.master')
@section('title')
    Dashboard
@endsection
@section('content')
    <div style="margin-top: -50px;margin:auto;" class="col-lg-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Bubble Chart</h3>
                </div>
            </div>
            <div class="card-body">
                <!--begin::Chart-->
                <div id="chart_8"></div>
                <!--end::Chart-->
            </div>
        </div>
        <!--end::Card-->
    </div>

    <script>
        var _demo8 = function() {
            const apexChart = "#chart_8";
            var options = {
                series: [{
                        name: 'Phòng chống',
                        data: generateBubbleData(new Date('11 Feb 2017 GMT').getTime(), 20, {
                            min: 10,
                            max: 60
                        })
                    },
                    {
                        name: 'Phòng đặt',
                        data: generateBubbleData(new Date('11 Feb 2017 GMT').getTime(), 20, {
                            min: 10,
                            max: 60
                        })
                    },
                    {
                        name: 'Phản hồi tốt',
                        data: generateBubbleData(new Date('11 Feb 2017 GMT').getTime(), 20, {
                            min: 10,
                            max: 60
                        })
                    },
                    {
                        name: 'Phản hồi tệ',
                        data: generateBubbleData(new Date('11 Feb 2017 GMT').getTime(), 20, {
                            min: 10,
                            max: 60
                        })
                    }
                ],
                chart: {
                    height: 350,
                    type: 'bubble',
                },
                dataLabels: {
                    enabled: false
                },
                fill: {
                    opacity: 0.8
                },
                xaxis: {
                    tickAmount: 12,
                    type: 'category',
                },
                yaxis: {
                    max: 70
                },
                colors: [primary, success, warning, danger]
            };

            var chart = new ApexCharts(document.querySelector(apexChart), options);
            chart.render();
        }
    </script>
@endsection
