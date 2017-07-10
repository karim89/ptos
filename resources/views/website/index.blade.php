@extends('layouts.website')
@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
		<div class="item active">
			<img src="images/banner-01.jpg" style="width:100%;">
			<div class="cloud-bg col-sm-12">
    <div class="header-text col-sm-6">
      <p class="title-banner col-sm-10">Kimia Proficiency Testing Online System</p>
      <p class="banner-text col-sm-8">Kimia-PTOS or Kimia Proficiency Testing Online is a system provided by Department of Chemistry Malaysia for chemical testing laboratories who want to conduct Proficiency Testing.</p>
    </div>

</div>
		</div>
		<div class="item">
			<img src="images/banner-02.jpg" style="width:100%;">
			<div class="cloud-bg col-sm-12">
    <div class="header-text col-sm-6">
      <p class="title-banner col-sm-10">Kimia Proficiency Testing Online System</p>
      <p class="banner-text col-sm-8">Kimia-PTOS or Kimia Proficiency Testing Online is a system provided by Department of Chemistry Malaysia for chemical testing laboratories who want to conduct Proficiency Testing.</p>
    </div>

</div>
</div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
		<span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
		<span class="sr-only">Next</span>
    </a>
	</div>
<div class="slide-content container-fluid">
	<div class="slide-text container">
		<div class="col-sm-4">
			<p class="address-text">ADDRESS</p>
			<p>Department of Chemistry Malaysia<br><span>(Ministry of Science, Technology and Innovation)</span></p>
			<p>Jalan Sultan 46661 Petaling Jaya,<br>Selangor, Malaysia</p>
		</div>
		<div class="col-sm-2">
			<p class="tel-text">Tel: 03-79853168</p>
			<p>Fax: 03-79853014</p>
			<p class="email-text"><a href="mailto:proftest@kimia.gov.my">proftest@kimia.gov.my</a></p>
		</div>
		<div class="col-sm-6">
			<p class="qr-text">Scan PTOS QR Code</p>
			<p><a href="">Contact Us</a> | <a href="">Portal Help</a> | <a href="">Site Map</a> | <a href="">Accessibility (W3C)</a> | <a href="">FAQ</a> | <a href="">Terms &amp; Condition</a> | <a href="">Privacy Policy</a> | <a href="">Security Policy</a> | <a href="">Disclaimer</a></p>
			<p>Visitor Counter : 1,850</p>
		</div>
	</div>
</div>
@endsection