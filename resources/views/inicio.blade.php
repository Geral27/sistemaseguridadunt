@extends('layout.plantilla')
@section('contenido')
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
                <div class="card-chart">
                    <div class="card-body">
                        {!! $chart->renderHtml() !!}
                    </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                    <i class="fas fa-user"></i>
                </div>
                <div class="card-wrap">
                <div class="card-header">
                    <h4>Usuarios</h4>
                </div>
                
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
                <div class="card-chart">
                    <div class="card-body">
                        {!! $chart1->renderHtml() !!}
                    </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-desktop"></i>
                </div>
                <div class="card-wrap">
                <div class="card-header">
                    <h4>Dispositivos</h4>
                </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card card-statistic-2">
                <div class="card-chart">
                    <div class="card-body">
                        {!! $chart2->renderHtml() !!}
                    </div>
                </div>
                <div class="card-icon shadow-primary bg-primary">
                <i class="fas fa-car"></i>
                </div>
                <div class="card-wrap">
                <div class="card-header">
                    <h4>Vehículos</h4>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                <h4>Verificaciones Dispositivos</h4>
                </div>
                <div class="card-body">
                    {!! $chart3->renderHtml() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
{!! $chart->renderChartJsLibrary() !!}
{!! $chart->renderJs() !!}
{!! $chart1->renderChartJsLibrary() !!}
{!! $chart1->renderJs() !!}
{!! $chart2->renderChartJsLibrary() !!}
{!! $chart2->renderJs() !!}
{!! $chart3->renderChartJsLibrary() !!}
{!! $chart3->renderJs() !!}

@endsection