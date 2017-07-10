@extends('layouts.website')
@section('content')
<div class="wrapper">
    <div class="content slideInUp">
          <p class="title" style="text-align:center; font-size:28px; color:#118175;">Registration</p>
          <div class="content-inner">
           <ul class="tabs">
                <li class="tab-link current" data-tab="tab-1"><i class="reg-lab">&nbsp;&nbsp;</i>LAB INFORMATION</li>
                <li class="tab-link" data-tab="tab-2"><i class="reg-officer">&nbsp;&nbsp;</i>OFFICER INFORMATION</li>
              </ul>
              <div id="tab-1" class="tab-content current">
                <div class="col-sm-12">
                  <p><span class="register-label">Name of Laboratory / Organisation:</span> <input type="text" class="register"/></p>
                  <p><span class="register-label">Delivery Address:</span> <input type="text" class="register"/></p>
                  <p><span class="register-label">&nbsp;</span> <input type="text" class="register"/></p>
                  <p><span class="register-label">Poscode:</span> <input type="text" class="register poscode"/></p>
                  <p><span class="register-label">State:</span> <select class="register-state">
                  <option value="">&nbsp;</option>
                  <option value="Johor">Johor</option>
                  <option value="Kedah">Kedah</option>
                  <option value="Kelantan">Kelantan</option>
                  <option value="Kuala Lumpur">Kuala Lumpur</option>
                  <option value="Melaka">Melaka</option>
                  <option value="Negeri Sembilan">Negeri Sembilan</option>
                  <option value="Pahang">Pahang</option>
                  <option value="Pulau Pinang">Pulau Pinang</option>
                  <option value="Perak">Perak</option>
                  <option value="Perlis">Perlis</option>
                  <option value="Selangor">Selangor</option>
                  <option value="Sabah">Sabah</option>
                  <option value="Sarawak">Sarawak</option>
                  <option value="Terengganu">Terengganu</option>
                  </select></p>
                  <p><span class="register-label">Country:</span> <select class="register-state">
                  <option value="">&nbsp;</option>
                  <option value="Johor">Johor</option>
                  <option value="Kedah">Kedah</option>
                  <option value="Kelantan">Kelantan</option>
                  <option value="Kuala Lumpur">Kuala Lumpur</option>
                  <option value="Melaka">Melaka</option>
                  <option value="Negeri Sembilan">Negeri Sembilan</option>
                  <option value="Pahang">Pahang</option>
                  <option value="Pulau Pinang">Pulau Pinang</option>
                  <option value="Perak">Perak</option>
                  <option value="Perlis">Perlis</option>
                  <option value="Selangor">Selangor</option>
                  <option value="Sabah">Sabah</option>
                  <option value="Sarawak">Sarawak</option>
                  <option value="Terengganu">Terengganu</option>
                  </select></p>
                  <p class="register-wrapper-1"><span class="register-label">&nbsp;</span> <button type="button" class="add-lab-button">Add Lab&nbsp;&nbsp;<i class="add-lab">&nbsp;</i></button></p>
                </div>
              </div>
              <div id="tab-2" class="tab-content">
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </div>
          </div>
    </div>
        </div>
</div>
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