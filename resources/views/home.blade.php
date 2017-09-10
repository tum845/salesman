@extends('layouts.app')

@section('content')
<div class="content">
    <div class="row">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-sm-8">

                <div id="pop-div"></div>


            </div>
            <div class="col-sm-4">
                <div id="chart-div"></div>
            </div>

        </div>
    </div>
    </div>
</div>
@endsection

@section('scripts')

    <?= $lava->render('PieChart', 'IMDB', 'chart-div'); ?>
    <?= $lava->render('LineChart', 'Temps', 'pop-div') ?>
    <?= $lava->renderAll(); ?>

@endsection
