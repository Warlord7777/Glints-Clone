@extends('layouts.mainUser')
@push('style')
    <link rel="stylesheet" href="{{asset('css/auto.css')}}">
@endpush
@section('content')
 <div class="container-fluid" style="padding-top: 70px;">
       <form action="/user/profil/edit-profil" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
       <div class="container">
        <div class="row">
            <div class="col">
                <div class="box">
                    <div class="segment">
                        <p style="  margin-top: 20px; text-align: left;">
                        <h4> <b> Informasi Dasar </b></h4> <a href="/user/profil"> <button type="button"
                        style="position: relative; top: -30px; float: right;" class="btn-close"
                        aria-label="Close"></button> </a>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col">
                        <div class="box d-flex">
                            <label for="upload" class="upload-label">
                                <div class="profile-picture-container">
                                    <img src="{{asset('storage/'.$profile->profile_picture)}}"
                                        alt="gambar" class="profile-picture preview">
                                    <div class="overlay">
                                        <i class="fas fa-camera"></i>
                                        <svg data-testid="icon-svg"
                                            class="IconStyle__VerticalCenteredSvg-sc-x7d280-0 fElmt2" width="30"
                                            height="30" fill="#017EB7" viewBox="0 0 100 100">
                                            <path
                                                d="M0 79.22l61.299-61.298 20.779 20.78L20.779 100H0V79.22zm98.182-56.623l-10.39 10.39-20.779-20.78 10.39-10.389c2.424-2.424 4.935-2.424 7.532 0l13.247 13.247c2.424 2.597 2.424 5.108 0 7.532z">

                                            </path>
                                        </svg>
                                    </div>
                                </div>
                                <input type="hidden" name="oldImage" value="{{$profile->profile_picture}}">
                                <input type="file" id="upload" name="upload" class="upload-button" onchange="previewImage()">
                            </label>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        

                        <div class="input-group">
                             
                            <input type="text" aria-label="First name" class="form-control me-3 @error('first_name') is-invalid @enderror"
                                placeholder="First name" name="first_name" value="{{$profile->User->first_name}}">
                                @error('first_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            <input type="text" aria-label="Last name" name="last_name" class="form-control @error('last_name') is-invalid @enderror" placeholder="last name" value="{{$profile->User->last_name}}">
                                @error('last_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>

                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <div class="box--lg mt-3 mb-3">
                        <input id="significant-number-input-5"
                            data-testid="significant-number-input" type="tel" placeholder="Telepon"
                            aria-label="Telepon" name="telephone"
                            class="form-control PhoneNumberInputStyles__SignificantNumberInput-sc-80kraj-5 ehKsDg @error('telephone') is-invalid @enderror" value="{{$profile->telephone}}"
                            style="width: 100%; height: 40px; border: px solid black ;">
                            @error('telephone')
                                    <div class="invalid-feedback">
                                        {{$message}}
                                    </div>
                                @enderror
                        <p style="text-align: left;" class="text-muted">Example: 081362585959</p>
                    </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col">
                      <select class="form-select form-select @error('gender') is-invalid @enderror" name="gender" aria-label=".form-select-lg example">
                                <option selected value="">Jenis Kelamin</option>
                                <option {{$profile->gender == 'laki-laki' ? 'selected' : ''}} value="laki-laki">Laki-laki</option>
                                <option {{$profile->gender == 'perempuan' ? 'selected' : ''}} value="perempuan">Perempuan</option>
                                <option {{$profile->gender == 'tidak ingin memberi tau' ? 'selected' : ''}} value="tidak ingin memberi tau">Tidak Ingin Memberi Tau</option>
                                <option {{$profile->gender == 'lainnya' ? 'selected' : ''}} value="lainnya">Lainnya</option>
                            </select>
                            @error('gender')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h4>Email</h4>

                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="box-lg">

                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Masukkan Email Baru"
                            style="width: 100%;  height: 40px;" value="{{$profile->User->email}}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror

                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h4 class="mt-3">Alamat</h4>
                    <div class="box">
                         <input type="text" class="form-control @error('address') is-invalid @enderror" name="location" placeholder="Masukkan Lokasi Anda"
                            style="width: 100%;  height: 40px;" value="{{$profile->location}}">
                        @error('location')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                     <div class="row">
                <div class="col mb-3 mt-3">
                    <select class="form-select form-select @error('status') is-invalid @enderror" name="status" aria-label=".form-select-lg example">
                        <option selected value="">Status Kependudukan</option>
                        <option {{$profile->residence_status == 'citizen' ? 'selected' : ''}} value="citizen">Citizen</option>
                        <option {{$profile->residence_status == 'permanent resident' ? 'selected' : ''}} value="permanent resident">Permanent Resident</option>
                        <option {{$profile->residence_status == 'work permit' ? 'selected' : ''}} value="work permit">Work permit</option>
                        <option {{$profile->residence_status == 'employment pass' ? 'selected' : ''}} value="employment pass">Employment Pass</option>
                        <option {{$profile->residence_status == 'student pass' ? 'selected' : ''}} value="student pass">Student Pass</option>
                    </select>
                     @error('status')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <select class="form-select form-select @error('citizenship') is-invalid @enderror" name="citizenship">
                        <option selected value="">Kewarganegaraan</option>
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Åland Islands">Åland Islands</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antarctica">Antarctica</option>
                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <option value="Benin">Benin</option>
                        <option value="Bermuda">Bermuda</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Bouvet Island">Bouvet Island</option>
                        <option value="Brazil">Brazil</option>
                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Cape Verde">Cape Verde</option>
                        <option value="Cayman Islands">Cayman Islands</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Christmas Island">Christmas Island</option>
                        <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo</option>
                        <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                        <option value="Cook Islands">Cook Islands</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cote D'ivoire">Cote D'ivoire</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czech Republic">Czech Republic</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                        <option value="Faroe Islands">Faroe Islands</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="French Guiana">French Guiana</option>
                        <option value="French Polynesia">French Polynesia</option>
                        <option value="French Southern Territories">French Southern Territories</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Greece">Greece</option>
                        <option value="Greenland">Greenland</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guadeloupe">Guadeloupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guernsey">Guernsey</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guinea-bissau">Guinea-bissau</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                        <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Isle of Man">Isle of Man</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jersey">Jersey</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                        <option value="Korea, Republic of">Korea, Republic of</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Macao">Macao</option>
                        <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Martinique">Martinique</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                        <option value="Moldova, Republic of">Moldova, Republic of</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montenegro">Montenegro</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Namibia">Namibia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                        <option value="New Caledonia">New Caledonia</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Niue">Niue</option>
                        <option value="Norfolk Island">Norfolk Island</option>
                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau">Palau</option>
                        <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Pitcairn">Pitcairn</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Reunion">Reunion</option>
                        <option value="Romania">Romania</option>
                        <option value="Russian Federation">Russian Federation</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Saint Helena">Saint Helena</option>
                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                        <option value="Saint Lucia">Saint Lucia</option>
                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                        <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                        <option value="Samoa">Samoa</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Serbia">Serbia</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Timor-leste">Timor-leste</option>
                        <option value="Togo">Togo</option>
                        <option value="Tokelau">Tokelau</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Emirates">United Arab Emirates</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States">United States</option>
                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Viet Nam">Viet Nam</option>
                        <option value="Virgin Islands, British">Virgin Islands, British</option>
                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                        <option value="Western Sahara">Western Sahara</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                    @error('citizenship')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h4>Usia dan Jenis Kelamin</h4>
                    <input type="text" name="age" id="usia" value="{{$profile->age}}" class="form-control mb-3 @error('age') is-invalid @enderror" placeholder="Masukkan Usia Anda">
                    @error('age')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror
                </div>
            </div>
             <div class="row">
                {{-- <div class="col">
                    <h4>Personal Branding</h4>
                    <input type="text" name="short_description" id="description" value="{{$profile->description}}" class="form-control mb-3 @error('description') is-invalid @enderror" placeholder="Masukkan Deskripsi Singkat Tentang Anda">
                    @error('description')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror --}}
                    {{-- <span class="fs-5">
                        Portfolio
                    </span>
                    <input type="hidden" name="oldPortfolio" value="{{$profile->portfolio}}">
                    <input type="file" name="portfolio" class="form-control @error('portfolio') is-invalid @enderror" style="opacity: 1;">
                    @error('portfolio')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                    @enderror --}}
                    {{-- <div class="box">
                         <textarea  name="experience" placeholder="Masukkan Pengalaman-Pengalaman Anda"
                            style="width: 100%;  height: 40px;" >{{$profile->experience}}
                        </textarea>
                        @error('experience')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="box">
                      <input type="text" name="skills" id="skill" value="{{$profile->skills}}" class="form-control mb-3 @error('skills') is-invalid @enderror" placeholder="Masukkan Skill Yang Anda Miliki">
                      @error('skills')
                          <div class="invalid-feedback">
                              {{$message}}
                          </div>
                      @enderror
                  </div>
                    <div class="box">
                         <textarea  name="achievements" placeholder="Masukkan Penghargaan-penghargaan yang telah Anda dapatkan"
                            style="width: 100%;  height: 40px;" > {{$profile->achievements}}
                        </textarea>
                        @error('achievements')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="box">
                         <textarea  name="education" placeholder="Masukkan Studi Anda"
                            style="width: 100%;  height: 40px;" >{{$profile->education}}
                        </textarea>
                        @error('education')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                       <div class="box">
                         <textarea  name="organization" placeholder="Masukkan Pengalaman Organisasi Anda"
                            style="width: 100%;  height: 40px;" > {{$profile->organization}}
                        </textarea>
                        @error('organization')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                     </div>
                       <div class="box">
                         <textarea  name="interest" placeholder="Masukkan Minat Anda"
                            style="width: 100%;  height: 40px;" >{{$profile->interest}}
                        </textarea>
                        @error('interest')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div> --}}
                {{-- </div> --}}
            </div>
            <div class="row-3 mt-3" style="text-align: right;">
                <div class="col">
                    <div class="d-grid gap-2 d-md-block">
                        <button class="btn btn-primary" style="border-radius: 7px;"
                            type="submit"><b>SIMPAN</b></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</form>
</div>
@endsection