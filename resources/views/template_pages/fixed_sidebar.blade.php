@extends('template.master')

@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Fixed Sidebar <small> Just add class <strong>menu_fixed</strong></small></h3>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        @endsection

@section('content_script')
<!-- jQuery custom content scroller -->
<script src="{{ URL::to('js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
@endsection
