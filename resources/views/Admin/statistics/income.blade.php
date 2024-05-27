@php
    $user = Auth::user();
@endphp
@extends('layout.Admin.master')
@section('title')
    Income list statistics
@endsection
@section('content')
    <h1>Total Revenue: {{ number_format($totalRevenue) }}</h1>

    <!-- Đây là nơi hiển thị biểu đồ -->
    <canvas id="revenue-chart" width="800" height="400"></canvas>

    <!-- Script để vẽ biểu đồ -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <script>
        // Dữ liệu của biểu đồ
        var revenueData = {!! json_encode($stats) !!};

        // Chuẩn bị dữ liệu cho biểu đồ
        var labels = revenueData.map(function(item) {
            return item.date;
        });
        var values = revenueData.map(function(item) {
            return item.value;
        });

        // Vẽ biểu đồ sử dụng Chart.js
        var ctx = document.getElementById('revenue-chart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Revenue',
                    data: values,
                    borderColor: 'rgb(75, 192, 192)',
                    tension: 0.1
                }]
            },
            options: {
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Month'
                        }
                    },
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Revenue (VNĐ)'
                        },
                        ticks: {
                            callback: function(value, index, values) {
                                return value.toLocaleString('en-US', {
                                    style: 'currency',
                                    currency: 'VND'
                                });
                            }
                        }
                    }
                }
            }
        });
    </script>
@endsection
