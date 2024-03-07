@extends('layouts.mainUser')

@push('style')
<style>
        body {
            font-family: calibri;
        }
        div {
            color: rgb(0, 0, 0);
        }
        .ddd {
            color: red;
        }
        .container {
            max-width: 50%;
        }
        .satu {
            max-width: 100%;
            height: 40vh;
        }
        .dua {

            height: 100%;
            overflow: auto;
        }
    </style>
@endpush


@push('script')
 <script type="text/javascript">
      
      
      var counter = 1; // Mengatur counter ke 1 sebagai awal

function getClick(checkbox) {
  var checkboxes = document.querySelectorAll("input[type=checkbox]");
  var selectedValues = [];

  for (var i = 0; i < checkboxes.length; i++) {
    if (checkboxes[i].checked) {
      selectedValues.push(checkboxes[i].value);
    }
  }

  var div = document.querySelector(".ddd");
  div.innerHTML = ""; // Mengosongkan div sebelum menambahkan elemen

  for (var i = 0; i < selectedValues.length; i++) {
    var span = document.createElement("span");
    span.innerText = selectedValues[i];

    var deleteButton = document.createElement("button");
    deleteButton.innerText = "X";
    deleteButton.dataset.id = counter; // Mengatur ID unik untuk tombol hapus
    deleteButton.dataset.value = selectedValues[i];
    deleteButton.addEventListener("mousedown", function() {
      var button = this;

      // Menunda penghapusan selama 300ms
      setTimeout(function() {
        // Memeriksa apakah tombol masih ada di dalam elemen
        if (button.parentNode) {
          var id = button.dataset.id;
          var element = document.getElementById(id);
          element.remove(); // Menghapus elemen dari tampilan

          // Mematikan checkbox terkait
          var checkboxes = document.querySelectorAll("input[type=checkbox]");
          for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].value === button.dataset.value) {
              checkboxes[i].checked = false;
            }
          }
        }
      }, 300);
    });

    var itemDiv = document.createElement("div");
    itemDiv.id = counter; // Mengatur ID unik untuk elemen utama
    counter++; // Increment counter untuk ID berikutnya

    itemDiv.appendChild(span);
    itemDiv.appendChild(deleteButton);

    div.appendChild(itemDiv);
  }
}
        function cariSkill() {
  var keyword = document.getElementById("keyword").value.toLowerCase();
  var checkboxes = document.querySelectorAll("input[type=checkbox]");

  for (var i = 0; i < checkboxes.length; i++) {
    var skill = checkboxes[i].value.toLowerCase();
    var skillDiv = checkboxes[i].parentNode;

    if (skill.includes(keyword)) {
      skillDiv.style.display = "block";
    } else {
      skillDiv.style.display = "none";
    }
  }
}




 
   
    
    </script>
@endpush
@section('content')
    <div class="container" style="padding-top: 70px;">
        <div class="row">
            <div class="col">
                <div class="segment ">
                    <p style="  margin-top: 20px; text-align: left;" > <h4 > <b > Skill</b></h4> <a href="/user/profil"> <button  type="button"  style="position: relative; top: -30px; float: right;" class="btn-close" aria-label="Close"></button> </a>
                    
                        <p>Select your strongest skills. This will allow recruiters to better understand your suitability for the job.</p>
                    </div>
            
           
            
            <!-- Input pencarian -->
            <label for="keyword"></label>
            <input type="text" id="keyword" oninput="cariSkill()" placeholder="Cari Skill">
            </div>
      
            <div class="row">
              <form action="/user/skill" method="POST" class="d-block">
                @csrf
                @method('put')
            <div class="satu">
                <div class="dua">
                    <div class="col">
                    <div class="box">
                            <div id="1">
                            <input type="checkbox" name="skills[]" value="Excel" onclick="getClick(this)"> Excel
                            </div>
                            <div id="2">
                            <input type="checkbox" name="skills[]" value="JavaScript" onclick="getClick(this)"> JavaScript
                            </div >
                            <div id="3">
                            <input type="checkbox" name="skills[]" value="Powerpoint" onclick="getClick(this)"> Powerpoint
                            </div>
                            <div id="4">
                            <input type="checkbox" name="skills[]" value="CSS" onclick="getClick(this)">CSS<br>
                            </div>
                            <div id="5"> 
                            <input type="checkbox" name="skills[]" value="HTML" onclick="getClick(this)">HTML
                            </div>
                            <div id="6">
                            <input type="checkbox" name="skills[]" value="JavaScript"onclick="getClick(this)">JavaScript<br>
                            
                            </div>
                            <div id="7">
                            <input type="checkbox" name="skills[]" value="Photoshop" onclick="getClick(this)">Photoshop<br>
                            </div>
                            <div id="8">
                            <input type="checkbox" name="skills[]" value="Good Communication Skills" onclick="getClick(this)">Good Communication Skills  <br>
                            </div>
                            <div id="9">
                            <input type="checkbox" name="skills[]" value="Teamwork" onclick="getClick(this)">Teamwork<br>
                            </div>
                            <div id="10">
                             <input type="checkbox" name="skills[]" value="Communication" onclick="getClick(this)">Communication<br>
                            </div>
                            <div id="11">
                                <input type="checkbox" name="skills[]" value="Microsoft Excel" onclick="getClick(this)">Microsoft Excel<br>
                                </div>
                                <div id="12">
                                <input type="checkbox" name="skills[]" value="Microsoft Word" onclick="getClick(this)">
                                Microsoft Word<br>
                                </div>
                                <div id="13">
                                <input type="checkbox" name="skills[]" value="English" onclick="getClick(this)">English<br>
                                </div>
                                <div id="14">
                                <input type="checkbox" name="skills[]" value="Administration" onclick="getClick(this)">Administration<br>   
                                </div>
                                <div id="15">
                                <input type="checkbox" name="skills[]" value="Social Media" onclick="getClick(this)">Social Media<br>
                                </div>
                                <div id="16">
                                    <input type="checkbox" name="skills[]" value="gak punya skill"  onclick="getClick(this)">gak punya skill<br>
                                </div>
                                <div id="17">
                                <input type="checkbox" name="skills[]" value="Microsoft Powerpoint" onclick="getClick(this)">Microsoft Powerpoint<br>
                                </div> 
                                <div id="18">
                                    <input type="checkbox" name="skills[]" value="Problem Solving" onclick="getClick(this)">Problem Solving<br>
                                </div>
                                <div id="19">
                                    <input type="checkbox" name="skills[]" value="Management" onclick="getClick(this)">Management<br>               
                                 </div>
                                 <div id="20">
                                    <input type="checkbox" name="skills[]" value="Customer Service"  onclick="getClick(this)">Customer Service<br>
                                   </div>
                                   <div id="21">
                                    <input type="checkbox" name="skills[]" value="Adobe Photoshop" onclick="getClick(this)">Adobe Photoshop<br>
                                   </div>
                                   <div id="22">
                                    <input type="checkbox" name="skills[]" value="dll"  onclick="getClick(this)">dll<br>
                                   </div>
                                   <div id="23">
                                    <input type="checkbox" name="skills[]" value="Office Administration"  onclick="getClick(this)">Office Administration<br>
                                </div>
                                <div id="24">
                                    <input type="checkbox" name="skills[]" value="Writing"  onclick="getClick(this)">Writing<br>
                                </div>
                                <div id="25">
                                    <input type="checkbox" name="skills[]" value="Project Management"  onclick="getClick(this)">Project Management<br>
                                </div>
                                <div id="26">
                                    <input type="checkbox" name="skills[]" value="Social Media Marketing"  onclick="getClick(this)">Social Media Marketing<br>
                                </div>
                                <div id="27">
                                    <input type="checkbox" name="skills[]" value="Business Development"  onclick="getClick(this)">Business Development<br>
                                </div>
                                <div id="28">
                                    <input type="checkbox" name="skills[]" value="Attention To Detail"  onclick="getClick(this)">Attention To Detail<br>
                                </div>
                                <div id="29">
                                    <input type="checkbox" name="skills[]" value="Graphic Design"  onclick="getClick(this)">Graphic Design<br>
                                </div>
                                <div id="30">
                                    <input type="checkbox" name="skills[]" value="Digital Marketing"  onclick="getClick(this)">Digital Marketing<br>
                                </div>
                                <div id="31">
                                    <input type="checkbox" name="skills[]" value="Adobe Illustrator"  onclick="getClick(this)">Adobe Illustrator<br>
                                    <div id="32">
                                        <input type="checkbox" name="skills[]" value="Accounting"  onclick="getClick(this)">Accounting<br>
                                    </div>
                                    <div id="33">
                                        <input type="checkbox" name="skills[]" value="Content Writing"  onclick="getClick(this)">Content Writing<br>
                                    </div>
                                    <div id="34">
                                        <input type="checkbox" name="skills[]" value=" Data Analysis"  onclick="getClick(this)"> Data Analysis<br>
                                    </div>
                                    <div id="35">
                                        <input type="checkbox" name="skills[]" value="MySQL"  onclick="getClick(this)">MySQL<br>
                                    </div>
                                    <div id="36">
                                        <input type="checkbox" name="skills[]" value="Finance"  onclick="getClick(this)">Finance <br>
                                    </div>
                                    <div id="37">
                                        <input type="checkbox" name="skills[]" value="Human Resources"  onclick="getClick(this)">Human Resources
                                        <br>
                                    </div>
                                    <div id="38">
                                        <input type="checkbox" name="skills[]" value="Negotiation" onclick="getClick(this)">Negotiation<br>
                                    </div>
                                    <div id="39">
                                        <input type="checkbox" name="skills[]" value="Interpersonal Skills" onclick="getClick(this)">Interpersonal Skills<br>
                                    </div>
                                    <div id="40">
                                        <input type="checkbox" name="skills[]" value="Marketing Communications" onclick="getClick(this)">Marketing Communications<br>
                                    </div>
                                    <div id="41">
                                        <input type="checkbox" name="skills[]" value="Photography" onclick="getClick(this)">Photography<br>
                                    </div>
                                    <div id="42">
                                        <input type="checkbox" name="skills[]" value="Copywriting"  onclick="getClick(this)">Copywriting<br>
                                    </div>
                                    <div id="43">
                                        <input type="checkbox" name="skills[]" value="Adobe Premiere Pro"  onclick="getClick(this)">Adobe Premiere Pro<br>
                                    </div>
                                    <div id="44">
                                        <input type="checkbox" name="skills[]" value="AutoCAD"  onclick="getClick(this)">AutoCAD<br>
                                    </div>
                                    <div id="45">
                                        <input type="checkbox" name="skills[]" value="PHP"  onclick="getClick(this)">PHP<br>
                                    </div>
                                    <div id="46">
                                        <input type="checkbox" name="skills[]" value="Java"  onclick="getClick(this)">Java<br>
                                    </div>
                                    <div id="47">
                                        <input type="checkbox" name="skills[]" value="Event Management "  onclick="getClick(this)">Event Management
                                        <br>
                                    </div>
                                    <div id="48">
                                        <input type="checkbox" name="skills[]" value="Python"  onclick="getClick(this)">Python<br>
                                    </div>
                                    <div id="49">
                                        <input type="checkbox" name="skills[]" value="Sales Marketing"  onclick="getClick(this)">Sales Marketing<br>
                                    </div>
                                    <div id="50">
                                        <input type="checkbox" name="bisa semuanya" name="skills[]" value="Python"  onclick="getClick(this)">bosa semuanya<br>
                                    </div>
                                    <div id="51">
                                        <input type="checkbox" name="skills[]" value="Machine Learning" onclick="getClick(this)">Machine Learning<br>
                                      </div>
                                      <div id="52">
                                        <input type="checkbox" name="skills[]" value="Data Science " onclick="getClick(this)">Data Science <br>
                                      </div>
                                      <div id="53">
                                        <input type="checkbox" name="skills[]" value="Agile Methodology" onclick="getClick(this)">Agile Methodology<br>
                                      </div>
                                      <div id="54">
                                        <input type="checkbox" name="skills[]" value=" Mobile App Development" onclick="getClick(this)"> Mobile App Development<br>
                                      </div>
                                      <div id="55">
                                        <input type="checkbox" name="skills[]" value=" User Experience Design (UX Design)" onclick="getClick(this)"> User Experience Design (UX Design)<br>
                                      </div>
                                   
                    </div>
                </div>
                </div>
                <div class="col">
                   
                        
                              <div id="51">
                                <input type="checkbox" name="skills[]" value="Machine Learning" onclick="getClick(this)">Machine Learning<br>
                              </div>
                              <div id="52">
                                <input type="checkbox" name="skills[]" value="Data Science " onclick="getClick(this)">Data Science <br>
                              </div>
                              <div id="53">
                                <input type="checkbox" name="skills[]" value="Agile Methodology" onclick="getClick(this)">Agile Methodology<br>
                              </div>
                              <div id="54">
                                <input type="checkbox" name="skills[]" value=" Mobile App Development" onclick="getClick(this)"> Mobile App Development<br>
                              </div>
                              <div id="55">
                                <input type="checkbox" name="skills[]" value=" User Experience Design (UX Design)" onclick="getClick(this)"> User Experience Design (UX Design)<br>
                              </div>
                              <div id="56">
                                <input type="checkbox" name="skills[]" value="Search Engine Optimization (SEO) " onclick="getClick(this)"> Search Engine Optimization (SEO)<br>
                              </div>
                              <div id="57">
                                <input type="checkbox" name="skills[]" value=" Content Management Systems (CMS)" onclick="getClick(this)"> Content Management Systems (CMS)<br>
                              </div>
                              <div id="58">
                                <input type="checkbox" name="skills[]" value="Video Editing " onclick="getClick(this)"> Video Editing<br>
                              </div>
                              <div id="59">
                                <input type="checkbox" name="skills[]" value="Web Analytics " onclick="getClick(this)"> Web Analytics<br> 
                              </div>
                              <div id="60">
                                <input type="checkbox" name="skills[]" value=" Front-end Frameworks (e.g., React, Vue)" onclick="getClick(this)"> Front-end Frameworks (e.g., React, Vue)<br>
                              </div>
                              <div id="61">
                                <input type="checkbox" name="skills[]" value="Back-end Development " onclick="getClick(this)"> Back-end Development<br>
                              </div>
                              <div id="62">
                                <input type="checkbox" name="skills[]" value=" Cloud Computing (e.g., AWS, Azure)" onclick="getClick(this)"> Cloud Computing (e.g., AWS, Azure)<br>
                              </div>
                              <div id="63">
                                <input type="checkbox" name="skills[]" value=" Cybersecurity" onclick="getClick(this)"> Cybersecurity<br>
                              </div>
                              <div id="64">
                                <input type="checkbox" name="skills[]" value="Network Administration " onclick="getClick(this)"> Network Administration<br>
                              </div>
                              <div id="65">
                                <input type="checkbox" name="skills[]" value="Quality Assurance (QA) " onclick="getClick(this)"> Quality Assurance (QA)<br>
                              </div>
                              <div id="66">
                                <input type="checkbox" name="skills[]" value=" Troubleshooting" onclick="getClick(this)"> Troubleshooting<br>
                              </div>
                              <div id="67">
                                <input type="checkbox" name="skills[]" value="Time Management " onclick="getClick(this)"> Time Management<br>
                              </div>
                              <div id="68">
                                <input type="checkbox" name="skills[]" value=" Leadership" onclick="getClick(this)"> Leadership<br>
                              </div>
                              <div id="69">
                                <input type="checkbox" name="skills[]" value=" Public Speaking" onclick="getClick(this)"> Public Speaking<br>
                              </div>
                              <div id="70">
                                <input type="checkbox" name="skills[]" value=" Market Research" onclick="getClick(this)"> Market Research<br>
                              </div>
                              <div id="71">
                                <input type="checkbox" name="skills[]" value=" Business Analysis" onclick="getClick(this)"> Business Analysis<br>
                              </div>
                              <div id="72">
                                <input type="checkbox" name="skills[]" value=" Supply Chain Management" onclick="getClick(this)"> Supply Chain Management<br>
                              </div>
                              <div id="73">
                                <input type="checkbox" name="skills[]" value=" Foreign Language Proficiency (e.g., Spanish, French)" onclick="getClick(this)"> Foreign Language Proficiency (e.g., Spanish, French)<br>
                              </div>
                              <div id="74">
                                <input type="checkbox" name="skills[]" value=" Negotiation" onclick="getClick(this)"> Negotiation<br>
                              </div>
                              <div id="75">
                                <input type="checkbox" name="skills[]" value=" Event Planning and Management" onclick="getClick(this)"> Event Planning and Management<br>
                              </div>
                              <div id="76">
                                <input type="checkbox" name="skills[]" value=" Copywriting" onclick="getClick(this)"> Copywriting<br>
                              </div>
                              <div id="77">
                                <input type="checkbox" name="skills[]" value=" Time Management" onclick="getClick(this)"> Time Management<br>
                              </div>

                              <div id="78">
                                <input type="checkbox" name="skills[]" value=" Artificial Intelligence (AI)" onclick="getClick(this)">Artificial Intelligence (AI)<br>
                              </div>
                              <div id="79">
                                <input type="checkbox" name="skills[]" value=" Virtual Reality (VR) Development" onclick="getClick(this)"> Virtual Reality (VR) Development<br>
                              </div>
                              <div id="80">
                                <input type="checkbox" name="skills[]" value=" Blockchain Technology" onclick="getClick(this)"> Blockchain Technology<br>
                              </div>
                              <div id="81">
                                <input type="checkbox" name="skills[]" value=" Social Media Advertising" onclick="getClick(this)"> Social Media Advertising<br>
                              </div>
                              <div id="82">
                                <input type="checkbox" name="skills[]" value=" Data Visualization" onclick="getClick(this)"> Data Visualization<br>
                              </div>
                              <div id="83">
                                <input type="checkbox" name="skills[]" value=" Technical Writing" onclick="getClick(this)"> Technical Writing<br>
                              </div>
                              <div id="84">
                                <input type="checkbox" name="skills[]" value=" Time Management" onclick="getClick(this)"> Time Management<br>
                              </div>
                              <div id="85">
                                <input type="checkbox" name="skills[]" value="Communication Skills " onclick="getClick(this)"> Communication Skills<br> 
                              </div>
                              <div id="86">
                                <input type="checkbox" name="skills[]" value=" Creative Thinking" onclick="getClick(this)"> Creative Thinking<br>
                              </div>
                              <div id="87">
                                <input type="checkbox" name="skills[]" value=" Critical Thinking" onclick="getClick(this)"> Critical Thinking<br>
                              </div>
                              <div id="88">
                                <input type="checkbox" name="skills[]" value=" Networking" onclick="getClick(this)"> Networking<br> 
                              </div>
                              <div id="89">
                                <input type="checkbox" name="skills[]" value=" Project Coordination" onclick="getClick(this)"> Project Coordination<br>
                              </div>
                              <div id="90">
                                <input type="checkbox" name="skills[]" value=" Strategic Planning" onclick="getClick(this)"> Strategic Planning<br>
                              </div>
                              <div id="91">
                                <input type="checkbox" name="skills[]" value=" Budgeting and Financial Planning" onclick="getClick(this)"> Budgeting and Financial Planning<br>
                              </div>
                              <div id="92">
                                <input type="checkbox" name="skills[]" value=" Sales and Business Development" onclick="getClick(this)"> Sales and Business Development<br> 
                              </div>
                              <div id="93">
                                <input type="checkbox" name="skills[]" value=" Project Management" onclick="getClick(this)"> Project Management<br>
                              </div>
                              <div id="94">
                                <input type="checkbox" name="skills[]" value="guru" onclick="getClick(this)">guru<br>
                              </div>
                              <div id="95">
                                <input type="checkbox" name="skills[]" value="Grant Writing " onclick="getClick(this)">Grant Writing <br>
                              </div>
                              <div id="96">
                                <input type="checkbox" name="skills[]" value=" Media Relations" onclick="getClick(this)"> Media Relations<br>
                              </div>
                              <div id="97">
                                <input type="checkbox" name="skills[]" value=" Project Coordination" onclick="getClick(this)"> Project Coordination<br> 
                              </div>
                              <div id="98">
                                <input type="checkbox" name="skills[]" value=" Digital Advertising" onclick="getClick(this)"> Digital Advertising<br>
                              </div>
                              <div id="99">
                                <input type="checkbox" name="skills[]" value=" Vendor Management" onclick="getClick(this)"> Vendor Management<br>
                              </div>
                              <div id="100">
                                <input type="checkbox" name="skills[]" value="olahraga" onclick="getClick(this)">olahraga<br> 
                              </div>
                              <div id="101">
                                <input type="checkbox" name="skills[]" value="bela diri" onclick="getClick(this)">bela diri<br>
                              </div>
                              <div id="102">
                                <input type="checkbox" name="skills[]" value="Data Entry " onclick="getClick(this)">Data Entry <br>
                              </div>
                              <div id="103">
                                <input type="checkbox" name="skills[]" value=" Employee Training and Development" onclick="getClick(this)"> Employee Training and Development<br> 
                              </div>
                           
                        </div>
                    </div>
                </div>
                  
            </div>
                
            </div>
    
   <div class="mt-5" style="border-top: 1px solid black; padding-bottom: 30px;">
    <div class="col mt-5"  >
       
        <div class="ddd"></div>
    </div>
</div>

<div class="col" style="border-top: 1px solid black; padding-bottom: 30px;">
  <br>
  <div class="button-container" style="text-align: right;">
      <div class="d-grid gap-2 d-md-block">
        <button class="btn btn-primary" style="border-radius: 7px;" type="submit"><b>SIMPAN</b></button>
      </div>
  </div>
</div>
</form>

    </div>
</div>
@endsection