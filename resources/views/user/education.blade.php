@extends('layouts.mainUser')
@section('content')
      <div class="container" style="padding-top: 70px;">
        <div class="row">
            <div class="col">
                <div class="box" style="padding: 0px;">
                  <div class="segment">
                    <p style="  margin-top: 20px; text-align: left;" > <h4 > <b > TAMBAH PENDIDIKAN </b></h4><a href="/user/profil"> <button  type="button"  style="position: relative; top: -30px; float: right;" class="btn-close" aria-label="Close"></button></a>
                    

                </div>
                </div>
            </div>
        </div>
        <form action="/user/education" class="d-block" method="POST">
          @csrf
        <div class="row">
          <div class="col">
              <!-- <div class="box" style="padding: 10px;"> -->
                  <div class="input-group-lg mb-3">
                      
                    <input list="institusi" class="form-control @error('institution')is-invalid @enderror w-100" placeholder="Istitusi" name="institution">
                      @error('institution')
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                      @enderror
    <datalist id="institusi">
     
      <option>Institut Teknologi Bandung</option>
      <option>Universitas Indonesia</option>
      <option>Universitas Gadjah Mada</option>
      <option>Institut Pertanian Bogor</option>
      <option>Universitas Airlangga</option>
      <option>Institut Teknologi Sepuluh Nopember</option>
      <option>Universitas Hasanuddin</option>
      <option>Universitas Brawijaya</option>
      <option>Universitas Diponegoro</option>
      <option>Institut Seni Indonesia</option>
      <!-- Tambahkan opsi negara lainnya di sini -->
    </datalist>
                    </div>
              <!-- </div> -->
          </div>
      </div>
        <div class="row">
            <div class="col">
                <!-- <div class="box" style="padding: 10px;"> -->
                    <div class="input-group-lg mb-3">
                        
                      <input list="gelar" class="form-control @error('degree')is-invalid @enderror w-100" placeholder="Gelar" name="degree">
      <datalist id="gelar">
        <option>Bachelor's Degree</option>
        <option>Master's Degree</option>
        <option>Ph.D.</option>
        <option>Associate Degree</option>
        <option>High School Diploma</option>
        <option>Vocational Certificate</option>
        <option>Professional Certification</option>
        <option>Postgraduate Certificate</option>
        <option>Non-Degree Programs</option>
      </datalist>
         @error('degree')
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                      @enderror
                      </div>
                <!-- </div> -->
            </div>
        </div>
        <div class="row">
          <div class="col">
              <!-- <div class="box" style="padding: 10px;"> -->
                  <div class="input-group-lg mb-3">
                      
                    <input list="Bidang" class="form-control w-100 @error('major')is-invalid @enderror" placeholder=" Bidang Studi" name="major">
    <datalist id="Bidang">
      <option>Computer Science</option>
      <option>Business Administration</option>
      <option>Engineering</option>
      <option>Psychology</option>
      <option>Art and Design</option>
      <option>Medical Sciences</option>
      <option>Social Sciences</option>
      <option>Education</option>
      <option>Natural Sciences</option>
      <!-- Tambahkan opsi negara lainnya di sini -->
    </datalist>
       @error('major')
                        <div class="invalid-feedback">
                          {{$message}}
                        </div>
                      @enderror
                    </div>
              <!-- </div> -->
          </div>
      </div>

        <div class="row">
            <div class="col-6">
                <div class="box">
                            <p style="font-size: small; margin-bottom: 3px;">Tanggal mulai</p>
                            <select class="form-select form-select-lg mb-3 @error('bulan_mulai') is-invalid @enderror" aria-label=".form-select-lg example" name="bulan_mulai">
                                <option value="" selected>Bulan</option>
                                <option value="Januari">Januari</option>
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                                <option value="Mei">Mei</option>
                                <option value="Juni">Juni</option>
                                <option value="July">July</option>
                                <option value="Agustus">Augustus</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>
                            </select>
                                @error('bulan_mulai')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                          </div>
                  
            </div>
            <div class="col-6">
                 <div class="box">
                            <p style="font-size: small; margin-bottom: 3px;">&nbsp;</p>
                            <select class="form-select form-select-lg mb-3 @error('tahun_mulai') is-invalid @enderror" aria-label=".form-select-lg example" name="tahun_mulai">
                                <option value="" selected>Tahun</option>
                                <option value="1963">1963</option>
                                <option value="1964">1964</option>
                                <option value="1965">1965</option>
                                <option value="1966">1966</option>
                                <option value="1967">1967</option>
                                <option value="1968">1968</option>
                                <option value="1969">1969</option>
                                <option value="1970">1970</option>
                                <option value="1971">1971</option>
                                <option value="1972">1972</option>
                                <option value="1973">1973</option>
                                <option value="1974">1974</option>
                                <option value="1975">1975</option>
                                <option value="1976">1976</option>
                                <option value="1977">1977</option>
                                <option value="1978">1978</option>
                                <option value="1979">1979</option>
                                <option value="1980">1980</option>
                                <option value="1981">1981</option>
                                <option value="1982">1982</option>
                                <option value="1983">1983</option>
                                <option value="1984">1984</option>
                                <option value="1985">1985</option>
                                <option value="1986">1986</option>
                                <option value="1987">1987</option>
                                <option value="1988">1988</option>
                                <option value="1989">1989</option>
                                <option value="1990">1990</option>
                                <option value="1991">1991</option>
                                <option value="1992">1992</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                            </select>
                                @error('tahun_mulai')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                          </div>
                  
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                 <div class="box">
                            <p style="font-size: small; margin-bottom: 3px;">Tanggal Berakhir</p>
                            <select class="form-select form-select-lg mb-3 @error('bulan_berakhir') is-invalid @enderror" aria-label=".form-select-lg example" name="bulan_berakhir">
                                <option value="" selected>Bulan</option>
                                <option value="Januari">Januari</option>
                                <option value="Februari">Februari</option>
                                <option value="Maret">Maret</option>
                                <option value="April">April</option>
                                <option value="Mei">Mei</option>
                                <option value="Juni">Juni</option>
                                <option value="July">July</option>
                                <option value="Agustus">Augustus</option>
                                <option value="September">September</option>
                                <option value="Oktober">Oktober</option>
                                <option value="November">November</option>
                                <option value="Desember">Desember</option>
                            </select>
                                @error('tahun_mulai')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                          </div>
                  
            </div>
            <div class="col-6">
                <div class="box">
                            <p style="font-size: small; margin-bottom: 3px;">&nbsp;</p>
                            <select class="form-select form-select-lg mb-3 @error('tahun_berakhir') is-invalid @enderror" aria-label=".form-select-lg example" name="tahun_berakhir">
                              <option value="" selected>Tahun</option>
                              <option value="1963">1963</option>
                                <option value="1964">1964</option>
                                <option value="1965">1965</option>
                                <option value="1966">1966</option>
                                <option value="1967">1967</option>
                                <option value="1968">1968</option>
                                <option value="1969">1969</option>
                                <option value="1970">1970</option>
                                <option value="1971">1971</option>
                                <option value="1972">1972</option>
                                <option value="1973">1973</option>
                                <option value="1974">1974</option>
                                <option value="1975">1975</option>
                                <option value="1976">1976</option>
                                <option value="1977">1977</option>
                                <option value="1978">1978</option>
                                <option value="1979">1979</option>
                                <option value="1980">1980</option>
                                <option value="1981">1981</option>
                                <option value="1982">1982</option>
                                <option value="1983">1983</option>
                                <option value="1984">1984</option>
                                <option value="1985">1985</option>
                                <option value="1986">1986</option>
                                <option value="1987">1987</option>
                                <option value="1988">1988</option>
                                <option value="1989">1989</option>
                                <option value="1990">1990</option>
                                <option value="1991">1991</option>
                                <option value="1992">1992</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                            </select>
                                @error('tahun_berakhir')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                          </div>
                  
            </div>
            <div class="row">
              <div class="col">
            <p>
            </div>
               <div class="row">
                
               </div>
               <br>
               <br>
               
               <div class="col" style="border-top: 1px solid black; padding-bottom: 30px;">
                <br>
                <div class="button-container" style="text-align: right;">
                    <div class="d-grid gap-2 d-md-block">
                        <a href="">
                            <button class="btn btn-primary" style="border-radius: 7px;" type="submit"><b>SIMPAN</b></button>
                        </a>
                    </div>
                </div>
        </form>

            </div>
        </div>
@endsection