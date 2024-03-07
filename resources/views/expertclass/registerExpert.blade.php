@extends('layouts.expertClass')

@section('content')
    <div class="container" style="padding-top: 65px;">
        <div class="row px-5 mt-4 pb-4" style="background: white;">
            <div>
                <div class="col-12 mt-5">
                    <div class="d-flex" style="justify-content: center;">
                        <h3>Ingin Membuat Expert Class?</h3>
                    </div>
                    <div class="d-flex" style="justify-content: center;">
                        <h5 class="text-muted">Yuk daftarkan diri kamu menjadi seorang expert terlebih dahulu!</h5>
                    </div>
                </div>

                <div class="row mt-3">
 
                    <div class="col-12">
                        <div class="d-flex" style="justify-content: center;">
                            <p>To get started, we'll need to know more about you</p>
                        </div>
                        <form action="/expertclass/register" method="POST" class="d-block">
                            @csrf
                            <div style="border-bottom: 2px solid #666666;">
                                <h4 style="font-weight: bold;">PENGALAMAN KERJA</h4>
                            </div>
                            <div class=" mt-2">
                                <div>
                                    <label class="mb-1" for="job_experience">Total Tahun Pengalaman Kerja</label><span
                                        class="ms-1" style="color: red;">*</span>
                                    <select class="form-select @error('job_experience') is-invalid @enderror " name="job_experience" id="job_experience"
                                        aria-label="Default select example"
                                        style="border-radius: 0%; border-color: #808080; height: 44px;">
                                        <option value="" selected>Pilih total tahun</option>
                                        <option value="<3">Di bawah 3 tahun</option>
                                        <option value="3-4">3-4 tahun</option>
                                        <option value="5-6">5-6 tahun</option>
                                        <option value="7-10">7-10 tahun</option>
                                        <option value=">10">lebih dari 10 tahun</option>
                                    </select>
                                    @error('job_experience')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mt-3">
                                <div class="mt-1">
                                    <label class="mb-1" for="linkedin">URL Profil LinkedIn</label><span class="ms-1"
                                        style="color: red;">*</span>
                                    <input type="text" style="width: 100%; height: 44px;" placeholder="www.mycompany.com"
                                        name="linkedin" id="linkedin" class="form-control @error('linkedin') is-invalid @enderror">
                                    @error('linkedin')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mt-4" style="border-bottom: 2px solid #666666;">
                                <h4 style="font-weight: bold;">PEKERJAAN SAAT INI</h4>
                            </div>

                            <div class=" mt-2">
                                <label for="job_name">Nama Pekerjaan</label><span class="ms-1"
                                    style="color: red;">*</span>
                                <div class="mt-1">
                                    <input type="text" style="width: 100%; height: 44px;"
                                        placeholder="Masukkan nama pekerjaan" name="job_name" id="job_name" class="form-control @error('job_name') is-invalid @enderror">
                                    @error('job_name')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class=" mt-2">
                                <label for="company_name">Perusahaan Saat Ini</label><span class="ms-1"
                                    style="color: red;">*</span>
                                <div class="mt-1">
                                    <input type="text" style="width: 100%; height: 44px;"
                                        placeholder="Masukkan nama perusahaan" name="company_name" id="company_name" class="form-control @error('company_name') is-invalid @enderror">
                                    @error('company_name')
                                         <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mt-3">
                                <div class="">
                                    <label class="mb-1" for="company_size">Ukuran Perusahaan</label><span class="ms-1"
                                        style="color: red;">*</span>
                                    <select class="form-select @error('company_size') is-invalid @enderror" name="company_size" id="company_size"
                                        aria-label="Default select example"
                                        style="border-radius: 0%; border-color: #808080; height: 44px;">
                                        <option value="" selected>Pilih ukuran perusahaan</option>
                                        <option value="1-50">1-50 Karyawan</option>
                                        <option value="51-300">51-300</option>
                                        <option value="301-500">301-500</option>
                                        <option value="501-1000">501-1000</option>
                                        <option value=">1000">lebih dari 1000 karyawan</option>
                                    </select>
                                    @error('company_size')
                                         <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            {{-- <div class=" mt-3">
                                <div class="">
                                    <label for="jobStarts">Tanggal mulai</label><span class="ms-1"
                                        style="color: red;">*</span>
                                    <div class="d-flex mt-1">
                                        <select class="form-select " name="jobStarts" id="jobStarts"
                                            aria-label="Default select example"
                                            style="border-radius: 0%; width: 50%; border-color: #808080; height: 44px;">
                                            <option selected>Pilih bulan</option>
                                            <option value="1">Januari</option>
                                            <option value="2">Februari</option>
                                            <option value="3">Maret</option>
                                            <option value="4">April</option>
                                            <option value="5">Mei</option>
                                            <option value="6">Juni</option>
                                            <option value="7">Juli</option>
                                            <option value="8">Agustus</option>
                                            <option value="9">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desember</option>

                                        </select>

                                        <select class="form-select ms-4" name="jobExperience" id="jobExperience"
                                            aria-label="Default select example"
                                            style="border-radius: 0%; width: 50%; border-color: #808080; height: 44px;">
                                            <option selected>Pilih tahun</option>
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
                                    </div>
                                </div>
                            </div> --}}

                            <div class=" mt-3">
                                <label for="company_position">Posisi Kerja</label><span class="ms-1"
                                    style="color: red;">*</span>
                                <div class="mt-1">
                                    <input type="text" style="width: 100%; height: 44px;"
                                        placeholder="Masukkan posisi kerja" name="company_position" id="company_position" class="form-control @error('company_position') is-invalid @enderror">
                                    @error('company_position')
                                         <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class=" mt-3">
                                <div class="">
                                    <label class="mb-1" for="company_level">Level Pekerjaan</label><span class="ms-1"
                                        style="color: red;">*</span>
                                    <select class="form-select @error('company_level') is-invalid @enderror" name="company_level" id="company_level"
                                        aria-label="Default select example"
                                        style="border-radius: 0%; border-color: #808080; height: 44px;">
                                        <option value="" selected>Masukkan jabatan</option>
                                        <option value="non-management">Non-Management</option>
                                        <option value="junior-level">Junior-level</option>
                                        <option value="mid-level">Mid-level</option>
                                        <option value="senior-level">Senior-level</option>
                                    </select>
                                    @error('company_level')
                                        <div class="invalid-feedback">
                                            {{$message}}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mt-4">
                                <button type="submit" style="width: 100%; background-color: #007acc; color: white; font-weight: bold;" class="btn py-3">KIRIM APLIKASI</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
