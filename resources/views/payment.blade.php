@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="text-center bold">PAYMENT HIERARCHY</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-md-8 col-xs-7 col-md-offset-2">
                <div class="padding-md prop-name border-all inline">
                  {{ Auth::user()->name }}
                </div>
                <div class="h-line"></div>
                <div class="prop-month border-all inline">
                  February
                </div>
              </div>
            </div>
            <hr class="v-line col-xs-offset-3"/>
            <div class="row">
              <div class="col-md-8 col-xs-7 col-md-offset-2">
                <div class="padding-md prop-name border-all inline">
                  {{ Auth::user()->name }}
                </div>
                <div class="h-line"></div>
                <div class="prop-month border-all inline">
                  March
                </div>
              </div>
            </div>
            <div class="inline h-rule col-xs-offset-3">
              <hr class="v-line"/><span>&#9660</span>
            </div>
            <div class="row">
              <div class="col-md-8 col-xs-7 col-md-offset-2">
                <div class="padding-md prop-name border-all inline">
                  {{ Auth::user()->name }}
                </div>
                <div class="h-line"></div>
                <div class="prop-month border-all inline">
                  April
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
