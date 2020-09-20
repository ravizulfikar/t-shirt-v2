@extends('layouts.users.users')

@push('head')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>   
<script type="text/javascript" src="{{asset('extension/js/fabric.js')}}"></script>
<link rel="stylesheet" href="{{asset('extension/css/timeline.css')}}">
<style type="text/css">
    .footer {
       padding: 70px 0;
       margin-top: 70px;
       border-top: 1px solid #E5E5E5;
       background-color: whiteSmoke;
       }           
   /*  body {
       padding-top: 60px;          
     }*/
     .color-preview {
       border: 1px solid #CCC;
       margin: 2px;
       zoom: 1;
       vertical-align: top;
       display: inline-block;
       cursor: pointer;
       overflow: hidden;
       width: 20px;
       height: 20px;
     }
     .rotate {  
       -webkit-transform:rotate(90deg);
       -moz-transform:rotate(90deg);
       -o-transform:rotate(90deg);
       /* filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=1.5); */
       -ms-transform:rotate(90deg);           
   }       
   .Arial{font-family:"Arial";}
   .Helvetica{font-family:"Helvetica";}
   .MyriadPro{font-family:"Myriad Pro";}
   .Delicious{font-family:"Delicious";}
   .Verdana{font-family:"Verdana";}
   .Georgia{font-family:"Georgia";}
   .Courier{font-family:"Courier";}
   .ComicSansMS{font-family:"Comic Sans MS";}
   .Impact{font-family:"Impact";}
   .Monaco{font-family:"Monaco";}
   .Optima{font-family:"Optima";}
   .HoeflerText{font-family:"Hoefler Text";}
   .Plaster{font-family:"Plaster";}
   .Engagement{font-family:"Engagement";}

</style>
@endpush

@section('content')
<div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0"><a href="{{route('beranda')}}">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Custom Design</strong></div>
      </div>
    </div>
  </div>

  <br>

  {{-- <div class="site-section">
    <div class="container">
      <div class="col-md-12">
       <section id="process">
          <div class="row">
            <div class="section-heading">
              <h2 class="text-center orange">Ordering Process</h2>
            </div>
          </div>
          <div class="container-fluid">
            <div class="row">
              <div class="steps-timeline text-center col-md-12">
                <div class="steps-one">
                  <h3>Step 1</h3>
                  <div class="end-circle back-orange"></div>
                  <div class="step-wrap">
                    <div class="steps-stops">
                      <div class="verticle-line back-orange"></div>
                    </div>
                  </div>
                  <div class="pane-warp back-blue">
                    <div class="steps-pane">
                      <img src="{{asset('extension/img/Step_1.jpg')}}">
                    </div>
                  </div>
                  <div class="inverted-pane-warp back-blue">
                    <div class="inverted-steps-pane">
                      <p>Buat Design sesuai dengan pilihan terbaik</p>
                    </div>
                  </div>
                </div>

                <div class="steps-two">
                  <h3>Step 2</h3>
                  <div class="step-wrap">
                    <div class="steps-stops">
                      <div class="verticle-line back-orange"></div>
                    </div>
                  </div>
                  <div class="pane-warp back-orange">
                    <div class="steps-pane">
                       <img src="{{asset('extension/img/Step_2.jpg')}}">
                    </div>
                  </div>
                  <div class="inverted-pane-warp back-orange">
                    <div class="inverted-steps-pane">
                      <p>Upload design yang diorder dengan design simulator kami</p>
                    </div>
                  </div>
                </div>

                <div class="steps-three">
                  <h3>Step 3</h3>
                  <div class="step-wrap">
                    <div class="steps-stops">
                      <div class="verticle-line back-orange"></div>
                    </div>
                  </div>
                  <div class="pane-warp back-blue">
                    <div class="steps-pane">
                     <img src="{{asset('extension/img/Step_3.jpg')}}">
                    </div>
                  </div>
                  <div class="inverted-pane-warp back-blue">
                    <div class="inverted-steps-pane">
                      <p>Konfirmasi pembayaran atas design yang kamu buat.</p>
                    </div>
                  </div>
                </div>

                <div class="steps-four">
                  <h3>Step 4</h3>
                  <div class="step-wrap">
                    <div class="steps-stops">
                      <div class="verticle-line back-orange"></div>
                    </div>
                  </div>
                  <div class="pane-warp back-orange">
                    <div class="steps-pane">
                       <img src="{{asset('extension/img/Step_4.png')}}">
                    </div>
                  </div>
                  <div class="inverted-pane-warp back-orange">
                    <div class="inverted-steps-pane">
                      <p>Kaos yang kamu design akan diantar ketempat kamu inginkan.</p>
                    </div>
                  </div>
                </div>
              </div>
            
            </div>
          </div>
       </section>
      </div>
    </div>
  </div> --}}


  <div class="site-selection">
    <div class="container">
      <section id="typography">
        <div class="page-header">
          <h1>Customize KAOSan</h1>
        </div>
      
        <!-- Headings & Paragraph Copy -->
        <div class="row">         
          <div class="col-md-3">
            <div class="row">
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'Warna')" id="defaultOpen">Warna</button>
                    <button class="tablinks" onclick="openCity(event, 'Gambar')">Gambar</button>
                </div>
                <div class="tabcontent" id="Warna">
                  <div class="well">
                    <select id="tshirttype">                        
                        <option value="{{asset('extension/img/crew_front.png')}}" selected="selected">Short Sleeve Shirts</option>
                        <option value="{{asset('extension/img/mens_longsleeve_front.png')}}">Long Sleeve Shirts</option>                                        
                        <option value="{{asset('extension/img/mens_hoodie_front.png')}}">Hoodies</option>                    
                        <option value="{{asset('extension/img/mens_tank_front.png')}}">Tank tops</option>
                    </select>   
                  </div>
                  <div class="well">
                      <ul class="nav">
                          <li class="color-preview" title="White" style="background-color:#ffffff;"></li>
                          <li class="color-preview" title="Dark Heather" style="background-color:#616161;"></li>
                          <li class="color-preview" title="Gray" style="background-color:#f0f0f0;"></li>
                          <li class="color-preview" title="Charcoal" style="background-color:#5b5b5b;"></li>
                          <li class="color-preview" title="Black" style="background-color:#222222;"></li>
                          <li class="color-preview" title="Heather Orange" style="background-color:#fc8d74;"></li>
                          <li class="color-preview" title="Heather Dark Chocolate" style="background-color:#432d26;"></li>
                          <li class="color-preview" title="Salmon" style="background-color:#eead91;"></li>
                          <li class="color-preview" title="Chesnut" style="background-color:#806355;"></li>
                          <li class="color-preview" title="Dark Chocolate" style="background-color:#382d21;"></li>
                          <li class="color-preview" title="Citrus Yellow" style="background-color:#faef93;"></li>
                          <li class="color-preview" title="Avocado" style="background-color:#aeba5e;"></li>
                          <li class="color-preview" title="Kiwi" style="background-color:#8aa140;"></li>
                          <li class="color-preview" title="Irish Green" style="background-color:#1f6522;"></li>
                          <li class="color-preview" title="Scrub Green" style="background-color:#13afa2;"></li>
                          <li class="color-preview" title="Teal Ice" style="background-color:#b8d5d7;"></li>
                          <li class="color-preview" title="Heather Sapphire" style="background-color:#15aeda;"></li>
                          <li class="color-preview" title="Sky" style="background-color:#a5def8;"></li>
                          <li class="color-preview" title="Antique Sapphire" style="background-color:#0f77c0;"></li>
                          <li class="color-preview" title="Heather Navy" style="background-color:#3469b7;"></li>                          
                          <li class="color-preview" title="Cherry Red" style="background-color:#c50404;"></li>
                      </ul>
                  </div>                
                </div>  
                <div class="tabcontent" id="Gambar">
                   <div class="well">
                          <div class="input-append">
                            <input class="span2" id="text-string" type="text" placeholder="add text here..."><button id="add-text" class="btn" title="Add text"><i class="icon-share-alt"></i></button>
                            <hr>
                          </div>
                          <div id="avatarlist">
                              <img style="cursor:pointer;" class="img-polaroid" src="{{asset('extension/img/invisibleman.jpg')}}">
                              <img style="cursor:pointer;" class="img-polaroid" src="{{asset('extension/img/Indonesia Pride-01 Update.jpg')}}">
                          </div>  
                          <div>
                              <hr>
                               <form action="" method="post" enctype="multipart/form-data">
                                   <input type="file" name="fileToUpload" id="fileToUpload">
                                   <input class="btn btn-sm btn-primary" type="submit" value="Upload Custom Image" name="submit">
                              </form>
                          </div>
                    </div>   
                </div>
              </div>
              <!-- <br/>
              <div class="row">
                 <button type="button" class="btn btn-large btn-success center" name="Download" id="Download">Pesan <i class="icon-briefcase icon-white"></i></button>
              </div>   -->      
          </div>      
          <div class="col-md-6">         
              <div align="center" style="min-height: 32px;">
                  <div class="clearfix">
                      <div class="btn-group inline pull-left" id="texteditor" style="display:none">                         
                          <button id="font-family" class="btn dropdown-toggle" data-toggle="dropdown" title="Font Style"><i class="icon-font" style="width:19px;height:19px;"></i></button>                             
                          <ul class="dropdown-menu" role="menu" aria-labelledby="font-family-X">
                              <li><a tabindex="-1" href="#" onclick="setFont('Arial');" class="Arial">Arial</a></li>
                              <li><a tabindex="-1" href="#" onclick="setFont('Helvetica');" class="Helvetica">Helvetica</a></li>
                              <li><a tabindex="-1" href="#" onclick="setFont('Myriad Pro');" class="MyriadPro">Myriad Pro</a></li>
                              <li><a tabindex="-1" href="#" onclick="setFont('Delicious');" class="Delicious">Delicious</a></li>
                              <li><a tabindex="-1" href="#" onclick="setFont('Verdana');" class="Verdana">Verdana</a></li>
                              <li><a tabindex="-1" href="#" onclick="setFont('Georgia');" class="Georgia">Georgia</a></li>
                              <li><a tabindex="-1" href="#" onclick="setFont('Courier');" class="Courier">Courier</a></li>
                              <li><a tabindex="-1" href="#" onclick="setFont('Comic Sans MS');" class="ComicSansMS">Comic Sans MS</a></li>
                              <li><a tabindex="-1" href="#" onclick="setFont('Impact');" class="Impact">Impact</a></li>
                              <li><a tabindex="-1" href="#" onclick="setFont('Monaco');" class="Monaco">Monaco</a></li>
                              <li><a tabindex="-1" href="#" onclick="setFont('Optima');" class="Optima">Optima</a></li>
                              <li><a tabindex="-1" href="#" onclick="setFont('Hoefler Text');" class="Hoefler Text">Hoefler Text</a></li>
                              <li><a tabindex="-1" href="#" onclick="setFont('Plaster');" class="Plaster">Plaster</a></li>
                              <li><a tabindex="-1" href="#" onclick="setFont('Engagement');" class="Engagement">Engagement</a></li>
                          </ul>
                          <button id="text-bold" class="btn" data-original-title="Bold"><img src="{{asset('extension/img/font_bold.png')}}" height="" width=""></button>
                          <button id="text-italic" class="btn" data-original-title="Italic"><img src="{{asset('extension/img/font_italic.png')}}" height="" width=""></button>
                          <button id="text-strike" class="btn" title="Strike" style=""><img src="{{asset('extension/img/font_strikethrough.png')}}" height="" width=""></button>
                          <button id="text-underline" class="btn" title="Underline" style=""><img src="{{asset('extension/img/font_underline.png')}}"></button>
                          <a class="btn" href="#" rel="tooltip" data-placement="top" data-original-title="Font Color"><input type="hidden" id="text-fontcolor" class="color-picker" size="7" value="#000000"></a>
                          <a class="btn" href="#" rel="tooltip" data-placement="top" data-original-title="Font Border Color"><input type="hidden" id="text-strokecolor" class="color-picker" size="7" value="#000000"></a>
                            <!--- Background <input type="hidden" id="text-bgcolor" class="color-picker" size="7" value="#ffffff"> --->
                      </div>                            
                      <div class="pull-right" align="" id="imageeditor" style="display:none">
                        <div class="btn-group">                                             
                            <button class="btn" id="bring-to-front" title="Bring to Front"><i class="icon-fast-backward rotate" style="height:19px;"></i></button>
                            <button class="btn" id="send-to-back" title="Send to Back"><i class="icon-fast-forward rotate" style="height:19px;"></i></button>
                            <button id="flip" type="button" class="btn" title="Show Back View"><i class="icon-retweet" style="height:19px;"></i></button>
                            <button id="remove-selected" class="btn" title="Delete selected item"><i class="icon-trash" style="height:19px;"></i></button>
                        </div>
                      </div>            
                  </div>                                              
              </div>                          
            
              <button id="flipback" type="button" class="btn" title="Rotate View"><i class="icon-retweet" style="height:19px;"></i></button>
              <div id="shirtDiv" class="page" style="width: 530px; height: 630px; position: relative; background-color: rgb(255, 255, 255);">
                  <img name="tshirtview" id="tshirtFacing" src="{{asset('extension/img/crew_front.png')}}">
                  <div id="drawingArea" style="position: absolute;top: 100px;left: 160px;z-index: 10;width: 200px;height: 400px;">                    
                    <canvas id="tcanvas" width=200 height="400" class="hover" style="-webkit-user-select: none;"></canvas>
                  </div>
              </div>
          </div>
      
          <div class="col-md-3">
            <div class="well">
              <h3>Select Merk</h3>
              <select style="width: 100%">                        
                  <option selected="selected">Gildan</option>
                  <option>Cotton 20S </option>                                        
                  <option>NSA</option>                    
                  <option>POLO</option>
              </select> 
            </div>
            <div class="well">
              <h3>Select Sizes</h3>
                <p>
                  <table class="table">
                      <tr>
                          <td><input type="checkbox">&emsp;XS</td>
                          <td align="right"><input min="0" style="width: 40px;" value="0" type="number"></td>
                      </tr>
                      <tr>
                          <td><input type="checkbox">&emsp;S</td>
                          <td align="right"><input min="0" style="width: 40px;" value="0" type="number"></td>
                      </tr>
                      <tr>
                          <td><input type="checkbox">&emsp;M</td>
                          <td align="right"><input min="0" style="width: 40px;" placeholder="0" type="number"></td>
                      </tr>
                      <tr>
                          <td><input type="checkbox">&emsp;L</td>
                          <td align="right"><input min="0" style="width: 40px;"  placeholder="0" type="number"></td>
                      </tr>
                      <tr>
                          <td><input type="checkbox">&emsp;XL</td>
                          <td align="right"><input min="0" style="width: 40px;"  placeholder="0" type="number"></td>
                      </tr>
                      <tr>
                          <td><input type="checkbox">&emsp;XXL</td>
                          <td align="right"><input min="0" style="width: 40px;"  placeholder="0" type="number"></td>
                      </tr>
                  </table>            
                </p>
                  <button type="button" class="btn btn-large btn-block btn-success center" name="pesan" id="btnpesan">Pesan <i class="icon-briefcase icon-white"></i></button>
            </div>                                   
          </div>
      
        </div>
      
      </section>
   </div><!-- /container -->
  </div>

  <div class="site-selection">
    <div class="container">
      <div class="col-md-4">
        <h1>Price List</h1><h2>Cotton 20S</h2>
      </div>
      <div class="row">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Size (lebar x panjang (cm))</th>
              <th scope="col">A4 (20x28cm)</th>
              <th scope="col">A3 (28x40cm)</th>
              <th scope="col">A2 (38x48cm)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">XS(41 x 62 cm)</th>
              <td>63.000</td>
              <td>69.000</td>
              <td>79.000</td>
            </tr>
            <tr>
              <th scope="row">S(44 x 65 cm)</th>
              <td>63.000</td>
              <td>69.000</td>
              <td>79.000</td>
            </tr>
            <tr>
              <th scope="row">M(47 x 68 cm)</th>
              <td>63.000</td>
              <td>69.000</td>
              <td>79.000</td>
            </tr>
            <tr>
              <th scope="row">L(50 x 71 cm)</th>
              <td>63.000</td>
              <td>69.000</td>
              <td>79.000</td>
            </tr>
            <tr>
              <th scope="row">XL(53 x 73 cm)</th>
              <td>63.000</td>
              <td>69.000</td>
              <td>79.000</td>
            </tr>
            <tr>
              <th scope="row">XXL(56 x 76 cm)</th>
              <td>68.000</td>
              <td>74.000</td>
              <td>84.000</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection

@push('scripts')

<script>
    $(document).ready(function(){
    $("#tshirttype").change(function(){
    $("img[name=tshirtview]").attr("src",$(this).val());

    });

    });
</script>
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster --> 
<script>
  document.getElementById("defaultOpen").click();
    var valueSelect = $("#tshirttype").val();
    $("#tshirttype").change(function(){
        valueSelect = $(this).val();
    });
    $('#flipback').click(
       function() { 
           if (valueSelect === "img/crew_front.png") {
               if ($(this).attr("data-original-title") == "Show Back View") {
                $(this).attr('data-original-title', 'Show Front View');                                
                $("#tshirtFacing").attr("src","img/crew_back.png");                 
                a = JSON.stringify(canvas);
                canvas.clear();
                try
                {
                   var json = JSON.parse(b);
                   canvas.loadFromJSON(b);
                }
                catch(e)
                {}
                
            } else {
                $(this).attr('data-original-title', 'Show Back View');                                      
                $("#tshirtFacing").attr("src","img/crew_front.png");                    
                b = JSON.stringify(canvas);
                canvas.clear();
                try
                {
                   var json = JSON.parse(a);
                   canvas.loadFromJSON(a);                     
                }
                catch(e)
                {}
            }       
           }
           
           else if (valueSelect === "img/mens_longsleeve_front.png") {
              if ($(this).attr("data-original-title") == "Show Back View") {
                $(this).attr('data-original-title', 'Show Front View');                                
                $("#tshirtFacing").attr("src","img/mens_longsleeve_back.png");                  
                a = JSON.stringify(canvas);
                canvas.clear();
                try
                {
                   var json = JSON.parse(b);
                   canvas.loadFromJSON(b);
                }
                catch(e)
                {}
                
            } else {
                $(this).attr('data-original-title', 'Show Back View');                                      
                $("#tshirtFacing").attr("src","img/mens_longsleeve_front.png");                 
                b = JSON.stringify(canvas);
                canvas.clear();
                try
                {
                   var json = JSON.parse(a);
                   canvas.loadFromJSON(a);                     
                }
                catch(e)
                {}
            }   
           }
           else if (valueSelect === "img/mens_tank_front.png") {
              if ($(this).attr("data-original-title") == "Show Back View") {
                $(this).attr('data-original-title', 'Show Front View');                                
                $("#tshirtFacing").attr("src","img/mens_tank_back.png");                    
                a = JSON.stringify(canvas);
                canvas.clear();
                try
                {
                   var json = JSON.parse(b);
                   canvas.loadFromJSON(b);
                }
                catch(e)
                {}
                
            } else {
                $(this).attr('data-original-title', 'Show Back View');                                      
                $("#tshirtFacing").attr("src","img/mens_tank_front.png");                   
                b = JSON.stringify(canvas);
                canvas.clear();
                try
                {
                   var json = JSON.parse(a);
                   canvas.loadFromJSON(a);                     
                }
                catch(e)
                {}
            }   
           }
           else if (valueSelect === "img/mens_hoodie_front.png") {
              if ($(this).attr("data-original-title") == "Show Back View") {
                $(this).attr('data-original-title', 'Show Front View');                                
                $("#tshirtFacing").attr("src","img/mens_hoodie_back.png");                  
                a = JSON.stringify(canvas);
                canvas.clear();
                try
                {
                   var json = JSON.parse(b);
                   canvas.loadFromJSON(b);
                }
                catch(e)
                {}
                
            } else {
                $(this).attr('data-original-title', 'Show Back View');                                      
                $("#tshirtFacing").attr("src","img/mens_hoodie_front.png");                 
                b = JSON.stringify(canvas);
                canvas.clear();
                try
                {
                   var json = JSON.parse(a);
                   canvas.loadFromJSON(a);                     
                }
                catch(e)
                {}
            }   
           }
        
            canvas.renderAll();
            setTimeout(function() {
                canvas.calcOffset();
            },200);     
    }); 
  function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
   $('#btnpesan').click(function(){
      window.location.href = 'cart.html';
   });
</script>
{{-- <script src="js/bootstrap.min.js"></script>   --}}
<script type="text/javascript" src="{{asset('extension/js/tshirtEditor.js')}}"></script>
<script type="text/javascript" src="{{asset('extension/js/jquery.miniColors.min.js')}}"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35639689-1']);
  _gaq.push(['_trackPageview']);

//   (function() {
//     var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
//     ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
//     var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
//   })();

</script>  
    
@endpush