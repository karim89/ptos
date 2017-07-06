@extends('layouts.app')
@section('content')
 
<ol class="breadcrumb col-lg-12" style="margin-bottom: 0px; margin-top: 20px;">
<li class="active">
    <span class="icon-ptos icon-home"></span>
    <span class="icon-arrow-bread">&gt;</span>
    <span class="text-bread">Dashboard</span>
</li>
</ol>
<div class="col-lg-12 content-wrapper">
<h1 class="page-header-top">
    Dashboard 
</h1>
 <!-- Box -->
<div class="col-lg-12 top-box">
  <div class="col-lg-3 col-md-6">
      <div class="panel-box panel-primary">
          <div class="panel-heading">
              <div class="row">
                  <div class="col-xs-9 text-left" style="margin-top:-15px;">
                      <div class="huge-number">09</div>
                      <div class="huge-text">Lab Registered</div>
                  </div>
                  <div class="col-xs-3 icon-ptos icon-silinder">  
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="col-lg-3 col-md-6">
      <div class="panel-box panel-primary">
          <div class="panel-heading">
              <div class="row">
                  <div class="col-xs-9 text-left" style="margin-top:-15px;">
                      <div class="huge-number">03</div>
                      <div class="huge-text">Test Taken</div>
                  </div>
                  <div class="col-xs-3 icon-ptos icon-tick">  
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="col-lg-3 col-md-6">
      <div class="panel-box panel-primary">
          <div class="panel-heading">
              <div class="row">
                  <div class="col-xs-9 text-left" style="margin-top:-15px;">
                      <div class="huge-number">06</div>
                      <div class="huge-text">Lab Undergoing</div>
                  </div>
                  <div class="col-xs-3 icon-ptos icon-clock">  
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="col-lg-3 col-md-6">
      <div class="panel-box panel-primary">
          <div class="panel-heading">
              <div class="row">
                  <div class="col-xs-9 text-left" style="margin-top:-15px;">
                      <div class="huge-number">33</div>
                      <div class="huge-text">Test Completed</div>
                  </div>
                  <div class="col-xs-3 icon-ptos icon-arrow">  
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Tabbing -->

<div class="col-lg-12">
<div class="col-lg-9 tabbing">
<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#action">ACTION</a></li>
  <li><a data-toggle="tab" href="#scheme">SCHEME</a></li>
  <li><a data-toggle="tab" href="#orders">ORDERS</a></li>
  <li><a data-toggle="tab" href="#lab-list">LAB LIST</a></li>
</ul>
<div class="tab-content">
<div id="action" class="tab-pane fade in active">
  <table width="100%" class="tab">
    <tr class="table-header">
    <td style="width:20%;">Item Details</td>
    <td style="width:40%;">Status</td>
    <td style="width:20%;">Date</td>
    <td style="width:20%; text-align:center;">Action</td>
    </tr>     
  </table>
  <table width="100%" style="border-bottom:1px solid #d5dce8;">
    <tr class="table-content">
    <td style="width:20%;">WAPAS 1-16</td>
    <td style="width:40%;">Fill in Result</td>
    <td style="width:20%;">20 Jan 2017</td>
    <td style="width:20%; text-align:center;"><button class="tab-view-button">View</button></td>
    </tr>
    <tr class="table-content">
    <td style="width:20%;">WAPAS 5-16</td>
    <td style="width:40%;">Fill in Result</td>
    <td style="width:20%;">20 Jan 2017</td>
    <td style="width:20%; text-align:center;"><button class="tab-view-button">View</button></td>
    </tr> 
    <tr class="table-content">
    <td style="width:20%;">ENVITEST 1-16</td>
    <td style="width:40%;">Fill in Result</td>
    <td style="width:20%;">20 Jan 2017</td>
    <td style="width:20%; text-align:center;"><button class="tab-view-button">View</button></td>
    </tr>         
  </table>
  <p>&nbsp;</p>
  <p><button class="tab-show-all">Show All</button></p>

</div>
<div id="scheme" class="tab-pane fade">
  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</div>
<div id="orders" class="tab-pane fade">
  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</div>
<div id="lab-list" class="tab-pane fade">
  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</div>
</div>
</div>
<div class="col-lg-3 count"> 
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
  <li data-target="#myCarousel" data-slide-to="1"></li>
  <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
  <div class="item active">
    <img src="images/count.png" alt="1">
    <p>&nbsp;</p>
    <p>before submission ends for<br><span class="count-text-blue">WAPAS 8-16</span></p>
  </div>

  <div class="item">
    <img src="images/count.png" alt="2">
    <p>&nbsp;</p>
    <p>before submission ends for<br><span class="count-text-blue">WAPAS 8-16</span></p>
  </div>

  <div class="item">
    <img src="images/count.png" alt="3">
    <p>&nbsp;</p>
    <p>before submission ends for<br><span class="count-text-blue">WAPAS 8-16</span></p>
  </div>
  </div>

  <!-- Left and right controls -->
  <!--<a class="left carousel-control" href="#myCarousel" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left"></span>
  <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right"></span>
  <span class="sr-only">Next</span>
  </a>-->
</div>
</div>
<!-- Timeline -->
<p>&nbsp;</p>
<div class="col-sm-12">
<div class="col-sm-12 timeline">
<p class="timeline-title">Proficiency Test Timeline</p>
<div style="overflow-x:auto;">
  <table width="100%" class="timeline-table">
    <tr>
      <th style="width: 7%; border:1px solid #b4dac1; border-bottom:0; word-spacing:-3px;">PT&nbsp;NO</th>
      <th style="width: 12.4%">Jan Week 1</th>
      <th style="width: 12.4%">Jan Week 2</th>
      <th style="width: 12.4%">Jan Week 3</th>
      <th style="width: 12.4%">Jan Week 4</th>
      <th style="width: 12.4%">Feb Week 1</th>
      <th style="width: 12.4%">Feb Week 2</th>
      <th style="width: 12.4%">Feb Week 3</th>
    </tr>
  </table>
  <table width="100%" class="timeline-table-bottom">
    <tr>
      <th style="width: 7%; white-space: pre;">TA-01</th>
      <th style="width: 12.4%">&nbsp;</th>
      <th style="width: 12.4%"><span class="timeline-text-ongoing ta-01">Ongoing</span></th>
      <th style="width: 12.4%">&nbsp;</th>
      <th style="width: 12.4%">&nbsp;</th>
      <th style="width: 12.4%">&nbsp;</th>
      <th style="width: 12.4%">&nbsp;</th>
      <th style="width: 12.4%">&nbsp;</th>
    </tr>
    <tr>
      <th style="width: 7%;">TA-05</th>
      <th style="width: 12.4%">&nbsp;</th>
      <th style="width: 12.4%">&nbsp;</th>
      <th style="width: 12.4%"><span class="timeline-text-ongoing ta-05">Ongoing</span></th>
      <th style="width: 12.4%">&nbsp;</th>
      <th style="width: 12.4%">&nbsp;</th>
      <th style="width: 12.4%">&nbsp;</th>
      <th style="width: 12.4%">&nbsp;</th>
    </tr>
    <tr>
      <th style="width: 7%;">TA-09</th>
      <th style="width: 12.4%">&nbsp;</th>
      <th style="width: 12.4%">&nbsp;</th>
      <th style="width: 12.4%">&nbsp;</th>
      <th style="width: 12.4%"><span class="timeline-text-ongoing ta-09">Completed</span></th>
      <th style="width: 12.4%">&nbsp;</th>
      <th style="width: 12.4%">&nbsp;</th>
      <th style="width: 12.4%">&nbsp;</th>
    </tr>
    <tr>
      <th style="width: 7%;">TA-11</th>
      <th colspan="7" style="width: 12.4%">Awaiting Test Kit </th>
    </tr>
    <tr>
      <th style="width: 7%;">TA-15</th>
      <th style="width: 12.4%">&nbsp;</th>
      <th style="width: 12.4%">&nbsp;</th>
      <th style="width: 12.4%">&nbsp;</th>
      <th style="width: 12.4%">&nbsp;</th>
      <th style="width: 12.4%"><span class="timeline-text-ongoing ta-15">Ongoing</span></th>
      <th style="width: 12.4%">&nbsp;</th>
      <th style="width: 12.4%">&nbsp;</th>
    </tr>
    <tr>
      <th style="width: 7%;">TA-19</th>
      <th style="width: 12.4%"><span class="timeline-text-ongoing ta-19">Completed</span></th>
      <th style="width: 12.4%">&nbsp;</th>
      <th style="width: 12.4%">&nbsp;</th>
      <th style="width: 12.4%">&nbsp;</th>
      <th style="width: 12.4%">&nbsp;</th>
      <th style="width: 12.4%">&nbsp;</th>

      <th style="width: 12.4%">&nbsp;</th>
    </tr>
  </table>
</div>
</div>
</div>
<p>&nbsp;</p>

<div class="col-lg-12">
<!--- Lab test status -->
<div class="lab-test col-lg-3 no-padding-left">
  <p class="timeline-title">Lab Test Status</p>
  <div class="lab-row">
    <p>
      <span class="lab-num">001</span>
      <span class="lab-code">TA-15</span>
    </p>
    <p>
      <span class="lab-bar"></span>
      <span class="lab-bar2" style="width: 76%;"></span>
      <span class="lab-percent">98%</span>
    </p>
  </div>
  <div class="lab-row">
    <p>
      <span class="lab-num">002</span>
      <span class="lab-code">TA-07</span>
    </p>
    <p>
      <span class="lab-bar"></span>
      <span class="lab-bar2" style="width: 73%;"></span>
      <span class="lab-percent">95%</span>
    </p>
  </div>
  <div class="lab-row">
    <p>
      <span class="lab-num">003</span>
      <span class="lab-code">TA-05</span>
    </p>
    <p>
      <span class="lab-bar"></span>
      <span class="lab-bar2" style="width: 63%;"></span>
      <span class="lab-percent">83%</span>
    </p>
  </div>
  <div class="lab-row">
    <p>
      <span class="lab-num">004</span>
      <span class="lab-code">TA-15</span>
    </p>
    <p>
      <span class="lab-bar"></span>
      <span class="lab-bar2" style="width: 25%;"></span>
      <span class="lab-percent">30%</span>
    </p>
  </div>
  <div class="lab-row">
    <p>
      <span class="lab-num">005</span>
      <span class="lab-code">TA-15</span>
    </p>
    <p>
      <span class="lab-bar"></span>
      <span class="lab-percent">0%</span>
    </p>
  </div>
  <div class="lab-row">
    <p>
      <span class="lab-num">006</span>
      <span class="lab-code">TA-07</span>
    </p>
    <p>
      <span class="lab-bar"></span>
      <span class="lab-bar2" style="width: 38%;"></span>
      <span class="lab-percent">51%</span>
    </p>
  </div>
  <div class="lab-row">
    <p>
      <span class="lab-num">007</span>
      <span class="lab-code">TA-10</span>
    </p>
    <p>
      <span class="lab-bar"></span>
      <span class="lab-bar2" style="width: 46%;"></span>
      <span class="lab-percent">60%</span>
    </p>
  </div>
     <div class="lab-row">
    <p>
      <span class="lab-num">008</span>
      <span class="lab-code">TA-10</span>
    </p>
    <p>
      <span class="lab-bar"></span>
      <span class="lab-bar2" style="width: 10%;"></span>
      <span class="lab-percent">11%</span>
    </p>
  </div>
  <div class="lab-row">
    <p>
      <span class="lab-num">010</span>
      <span class="lab-code">TA-15</span>
    </p>
    <p>
      <span class="lab-bar"></span>
      <span class="lab-bar2" style="width: 78%;"></span>
      <span class="lab-percent">100%</span>
    </p>
  </div>
 
</div>
<!--- chart -->
<div class="col-lg-9 chart-wrapper timeline">
  <div class="col-lg-12"> 
    <div class="col-lg-6 timeline-title">PTOS Ranking 2016</div>
    <div class="col-lg-6 no-padding category-rank">
      <span class="category-wrap">
        <span class="category-blue"></span>
        Environment
      </span> 
      <span class="category-wrap">
        <span class="category-green"></span>
        Water
      </span> 
      <span class="category-wrap">
        <span class="category-brown"></span>
        Your Company
      </span> 
    </div>
  </div>
  <div class="clearfix">&nbsp;</div>
    <div class="ct-chart ct-perfect-fourth"></div>
  </div>
</div>
@endsection
