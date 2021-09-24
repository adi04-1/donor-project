<!DOCTYPE html>
<html lang="en">
<head>
<title>Profile</title>
<link rel="shortcut icon" href="images/ibb_ficon.png" type="image/x-icon">
<link href="cssfile/normalize.css" type="text/css" rel="stylesheet">
<link href="cssfile/jquery-ui.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="cssfile/nivo-slider.css" type="text/css" media="screen">
<link href="cssfile/style.css" type="text/css" rel="stylesheet">
<link href="cssfile/validationEngine.jquery.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="cssfile/jquery.fancybox.css" media="screen">
<script type="text/javascript" async="" src="cssfile/ga.js"></script>
<script type="text/javascript" src="cssfile/jquery.js"></script>	
<script type="text/javascript" src="cssfile/jquery-ui.js"></script>	
<script type="text/javascript" src="cssfile/dd_roundies.js"></script>
<script type="text/javascript" src="cssfile/nivoslider.js"></script>
<script type="text/javascript" src="cssfile/custom-form-elements.js"></script>
<script type="text/javascript" src="cssfile/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="cssfile/jquery.validationEngine.js"></script>
<script type="text/javascript" src="cssfile/jquery.fancybox.js"></script>
<script type="text/javascript" src="cssfile/jquery.cookie.js"></script>

<meta charset="utf-8">
<link rel="shortcut icon" href="download.png" type="image/png">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/grid.css" type="text/css" media="screen">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/demo.css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
<link rel="stylesheet" type="text/css" href="css/stylenewser.css" media="all" />
    
<script src="js/jquery-1.7.1.min.js"></script>
<script src="js/cufon-yui.js"></script>
<script src="js/cufon-replace.js"></script>
<script src="js/Vegur_500.font.js"></script>
<script src="js/Ropa_Sans_400.font.js"></script>
<script src="js/FF-cash.js"></script>
<script src="js/script.js"></script>

<style>
table
{
    border-spacing:5px;
}
format
{
	font-family: 'Alegreya SC', Georgia, serif;
	font-size: 25px;
	line-height: 20px;
	display: block;
	font-weight: 400;
	font-style: bold;
	color: #000000;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.1);
}
</style>
<script type="text/javascript">
            function perform()
            {
				//document.write("dd");
				var mobno=document.contactform.mobileno;
				var phoneno = /^\d{10}$/;
				var letters = /^[A-Za-z]+$/;
				var txt=document.contactform.name;
				//var tellno=/^\d{8}$/;
				if(document.getElementById("name").value==null||document.getElementById("name").value==""||!txt.value.match(letters))
                {
                    alert("Enter a valid a name");
                    return false;
                }
                if(document.getElementById("age").value !=null)
                {
                    var age=parseInt(document.getElementById("age").value);
                    if(age<18)
                    {
                        alert("To donate blood age must be above 18");
                        return false;
                    }    
                }
					
                if(document.getElementById("weight").value !=null)
                {
                    var w=parseInt(document.getElementById("weight").value);
                    if(w<50)
                    {
                        alert("To donate blood weight must be above 50");
                        return false;
                    }    
                }
                
               if(document.getElementById("gender").value=="select")
                {
                    alert("Select gender");
                    return false;
                }
                
                if(document.getElementById("bloodgrp").value=="select")
                {
                    alert("Select blood group");
                    return false;
                }
                if(document.getElementById("state").value=="select")
                {
                    alert("Select state");
                    return false;
                }
                if(document.getElementById("district").value=="select"||document.getElementById("district").value=="")
                {
                    alert("Select state");
                    return false;
                }
				if(!mobno.value.match(phoneno))
				{
					alert("Enter a valid Mobile Number");
					return false;
       
				}
                if(document.getElementById("password").value!=document.getElementById("repassword").value)
                {
                    alert("Password mismatch");
                    return false;
                }
				if(document.getElementById("code").value!="86415")
                {
                    alert("Enter the captcha correctly");
                    return false;
                }
				
                confirm("Submitted successfully");    
            }
</script>

<script language="javascript" type="text/javascript">
	  
function dropdownlist(listindex)
{
//document.write(listindex);
//document.contactform.district.options.length = 0;
switch (listindex)
{
case "Andaman and Nicobar" :
document.contactform.district.options[0]=new Option("Select District","");
document.contactform.district.options[1]=new Option("A&N islands","A&N islands");
document.contactform.district.options[2]=new Option("Car Nicobar","Car Nicobar");
break;

case "Andhra Pradesh" :
document.contactform.district.options[0]=new Option("Select District","");
document.contactform.district.options[1]=new Option("Adilabad","Adilabad");
document.contactform.district.options[2]=new Option("Anantpur","Anantpur");
document.contactform.district.options[3]=new Option("Chittor","Chittor");
document.contactform.district.options[4]=new Option("Cuddapah","Cuddapah");
document.contactform.district.options[5]=new Option("East Godavari","East Godavari");
document.contactform.district.options[6]=new Option("Guntur","Guntur");
document.contactform.district.options[7]=new Option("Hyderabad Urban","Hyderabad Urban");
document.contactform.district.options[8]=new Option("Karim Nagar","Karim Nagar");
document.contactform.district.options[9]=new Option("Khammam","Khammam");
document.contactform.district.options[10]=new Option("Krishna","Krishna");
document.contactform.district.options[11]=new Option("Kurnool","Kurnool");
document.contactform.district.options[12]=new Option("Medak","Medak");
document.contactform.district.options[13]=new Option("Mehboobnagar","Mehboobnagar");
document.contactform.district.options[14]=new Option("Nalgonda","Nalgonda");
document.contactform.district.options[15]=new Option("Nellore","Nellore");
document.contactform.district.options[16]=new Option("Nizamabad","Nizamabad");
document.contactform.district.options[17]=new Option("Prakasam","Prakasam");
document.contactform.district.options[18]=new Option("RangaReddy","Ranga Reddy");
document.contactform.district.options[19]=new Option("Srikakulam","Srikakulam");
document.contactform.district.options[20]=new Option("Vishakapatnam","Vishakapatnam");
document.contactform.district.options[21]=new Option("Vizianagaram","Vizianagaram");
document.contactform.district.options[22]=new Option("Warangal","Warangal");
document.contactform.district.options[23]=new Option("West Godavari","West Godavari");

break;

case "Arunachal Pradesh" :
document.contactform.district.options[0]=new Option("Select District","");
document.contactform.district.options[1]=new Option("Bomdila","Bomdila");
document.contactform.district.options[2]=new Option("Changalang","Changalang");
document.contactform.district.options[3]=new Option("Daporijo","Daporijo");
document.contactform.district.options[4]=new Option("Diban Valley","Diban Valley");
document.contactform.district.options[5]=new Option("Dibang Valley","Dibang Valley");
document.contactform.district.options[6]=new Option("East Kameng Seppa","East Kameng Seppa");
document.contactform.district.options[7]=new Option("East Siang","East Siang");
document.contactform.district.options[8]=new Option("Itanagar","Itanagar");
document.contactform.district.options[9]=new Option("Khonsa","Khonsa");
document.contactform.district.options[10]=new Option("Lohit","Lohit");
document.contactform.district.options[11]=new Option("Lower Subansiri","Lower Subansiri");
document.contactform.district.options[12]=new Option("Roin","Roin");
document.contactform.district.options[13]=new Option("Tawang","Tawang");
break;

case "Assam" :
document.contactform.district.options[0]=new Option("Select District","");
document.contactform.district.options[1]=new Option("Barpeta","Barpeta");
document.contactform.district.options[2]=new Option("Bongaigaon","Bongaigaon");
document.contactform.district.options[3]=new Option("Cachar","Cachar");
document.contactform.district.options[4]=new Option("Darrang","Darrang");
document.contactform.district.options[5]=new Option("Dhemaji","Dhemaji");
document.contactform.district.options[6]=new Option("Dhubri","Dhubri");
document.contactform.district.options[7]=new Option("Dibrugarh","Dibrugarh");
document.contactform.district.options[8]=new Option("Goalpara","Goalpara");
document.contactform.district.options[9]=new Option("Golaghat","Golaghat");
document.contactform.district.options[10]=new Option("Hailakandi","Hailakandi");
document.contactform.district.options[11]=new Option("Jorhat","Jorhat");
document.contactform.district.options[12]=new Option("Kamrup","Kamrup");
document.contactform.district.options[13]=new Option("Karbi-Anglong","Karbi-Anglgong");
document.contactform.district.options[14]=new Option("Karimganj","Karimganj");
document.contactform.district.options[15]=new Option("Kokrajhar","Kokrajhar");
document.contactform.district.options[16]=new Option("Lakhimpur","Lakhimpur");
document.contactform.district.options[17]=new Option("Morigaon","Morigaon");
document.contactform.district.options[18]=new Option("N.C.Hills","N.C.Hills");
document.contactform.district.options[19]=new Option("Nagaon","Nagaon");
document.contactform.district.options[20]=new Option("Nalbari","Nalbari");
document.contactform.district.options[21]=new Option("Sibsagar","Sibsagar");
document.contactform.district.options[22]=new Option("Sonitpur","Sonitpur");
document.contactform.district.options[23]=new Option("Tinsukia","Tinsukia");
break;
case "Bihar" :
document.contactform.district.options[0]=new Option("Select District","");
document.contactform.district.options[1]=new Option("Araria","Araria");
document.contactform.district.options[2]=new Option("Aurangabad","Aurangabad");
document.contactform.district.options[3]=new Option("Banka","Banka");
document.contactform.district.options[4]=new Option("Begusarai","Begusarai");
document.contactform.district.options[5]=new Option("Bhabua","Bhabua");
document.contactform.district.options[6]=new Option("Bhagalpur","Bhagalpur");
document.contactform.district.options[7]=new Option("Bhojpur","Bhojpur");
document.contactform.district.options[8]=new Option("Buxar","Buxar");
document.contactform.district.options[9]=new Option("Champaran","Champaran");
document.contactform.district.options[10]=new Option("Darbhanga","Darbhanga");
document.contactform.district.options[11]=new Option("East","East");
document.contactform.district.options[12]=new Option("Gaya","Gaya");
document.contactform.district.options[13]=new Option("Gopalganj","Gopalganj");
document.contactform.district.options[14]=new Option("Jamui","Jamui");
document.contactform.district.options[15]=new Option("Jehanabad","Jehanabad");
document.contactform.district.options[16]=new Option("Katihar","Katihar");
document.contactform.district.options[17]=new Option("Khagaria","Khagaria");
document.contactform.district.options[18]=new Option("Kishanganj","Kishanganj");
document.contactform.district.options[19]=new Option("Madhepura","Madhepura");
document.contactform.district.options[20]=new Option("Madhubani","Madhubani");
document.contactform.district.options[21]=new Option("Munger","Munger");
document.contactform.district.options[22]=new Option("Muzaffarpur","Muzaffarpur");
document.contactform.district.options[23]=new Option("Nalanda","Nalanda");
document.contactform.district.options[24]=new Option("Nawada","Nawada");
document.contactform.district.options[25]=new Option("Patna","Patna");
document.contactform.district.options[26]=new Option("Purnea","Purnea");
document.contactform.district.options[27]=new Option("Rohtas","Rohtas");
document.contactform.district.options[28]=new Option("Saharsa","Saharsa");
document.contactform.district.options[29]=new Option("Samastipur","Samastipur");

document.contactform.district.options[30]=new Option("Saran","Saran");
document.contactform.district.options[31]=new Option("Sekhpura","Sekhpura");
document.contactform.district.options[32]=new Option("Seohar","Seohar");
document.contactform.district.options[33]=new Option("Sitamarhi","Sitamarhi");
document.contactform.district.options[34]=new Option("Siwan","Siwan");
document.contactform.district.options[35]=new Option("Supaul","Supaul");
document.contactform.district.options[36]=new Option("Vaishali","Vaishali");
document.contactform.district.options[37]=new Option("West Champaran","West Champaran");
break;
case "Chandigarh" :
document.contactform.district.options[0]=new Option("Select District","");
document.contactform.district.options[0]=new Option("Chandigarh","Chandigarh");

break;
case "Chattisgarh" :
document.contactform.district.options[0]=new Option("Select District","");
document.contactform.district.options[1]=new Option("Bastar","Bastar");
document.contactform.district.options[2]=new Option("Bilaspur","Bilaspur");
document.contactform.district.options[3]=new Option("Dantewada","Dantewada");
document.contactform.district.options[4]=new Option("Dhamtari","Dhamtari");
document.contactform.district.options[5]=new Option("Durg","Durg");
document.contactform.district.options[6]=new Option("Janjgir-Champa","Janjgir-Champa");
document.contactform.district.options[7]=new Option("Jashpur","Jashpur");
document.contactform.district.options[8]=new Option("Kanker","Kanker");
document.contactform.district.options[9]=new Option("Kawardha","Kawardha");
document.contactform.district.options[10]=new Option("Korba","Korba");
document.contactform.district.options[11]=new Option("Koriya","Koriya");
document.contactform.district.options[12]=new Option("Mahasamund","Mahasamund");
document.contactform.district.options[13]=new Option("Raigarh","Raigarh");
document.contactform.district.options[14]=new Option("Raipur","Raipur");
document.contactform.district.options[15]=new Option("Rajnandgaon","Rajnandgaon");
document.contactform.district.options[16]=new Option("Surguja","Surguja");

break;
case "Dadra and Nagar":
document.contactform.district.options[0]=new Option("Select District","");
document.contactform.district.options[0]=new Option("Dadra","Dadra");
break;
case "Daman and Diu":
document.contactform.district.options[0]=new Option("Select District","");
document.contactform.district.options[0]=new Option("Dama","Dama");
document.contactform.district.options[0]=new Option("Diu","Diu");

break;
case "Delhi":
document.contactform.district.options[0]=new Option("Select District","");
document.contactform.district.options[1]=new Option("Central","Central");
document.contactform.district.options[2]=new Option("New Delhi","New Delhi");
document.contactform.district.options[3]=new Option("North","North");
document.contactform.district.options[4]=new Option("North","North");
document.contactform.district.options[5]=new Option("North East","North East");
document.contactform.district.options[6]=new Option("North West","North West");
document.contactform.district.options[7]=new Option("South West","South West");
document.contactform.district.options[8]=new Option("West","West");

break;
case "Goa":
document.contactform.district.options[0]=new Option("Select District","");
document.contactform.district.options[1]=new Option("NorthGoa","NorthGoa");
document.contactform.district.options[2]=new Option("SouthGoa","SouthGoa");

break;
case "Gujarat":
document.contactform.district.options[0]=new Option("Select District","");
document.contactform.district.options[1]=new Option("Ahmedabad","Ahmedabad");
document.contactform.district.options[2]=new Option("Amrela","Amrela");
document.contactform.district.options[3]=new Option("Anand","Anand");
document.contactform.district.options[4]=new Option("Banaskantha","Banaskantha");
document.contactform.district.options[5]=new Option("Bharuch","Bharuch");
document.contactform.district.options[6]=new Option("Bhavnagar","Bhavnagar");
document.contactform.district.options[7]=new Option("Dahod","Dahod");
document.contactform.district.options[8]=new Option("Dangs","Dangs");
document.contactform.district.options[9]=new Option("Gandhinagar","Gandhinagar");
document.contactform.district.options[10]=new Option("Jamnagar","Jamnagar");
document.contactform.district.options[11]=new Option("Junagadh","Junagadh");
document.contactform.district.options[12]=new Option("Kheda","Kheda");
document.contactform.district.options[13]=new Option("Kutch","Kutch");
document.contactform.district.options[14]=new Option("Mehsana","Mehsana");
document.contactform.district.options[15]=new Option("Narmada","Narmada");
document.contactform.district.options[16]=new Option("Navsari","Navsari");
document.contactform.district.options[17]=new Option("Panchmahals","Panchmahals");
document.contactform.district.options[18]=new Option("Patan","Patan");
document.contactform.district.options[19]=new Option("Porbander","Porbander");
document.contactform.district.options[20]=new Option("Rajkot","Rajkot");
document.contactform.district.options[21]=new Option("Sabarkantha","Sabarkantha");
document.contactform.district.options[22]=new Option("Surat","Surat");
document.contactform.district.options[23]=new Option("Surendranagar","Surendranagar");
document.contactform.district.options[24]=new Option("Vadodara","Vadodara");
document.contactform.district.options[25]=new Option("Valsad","Valsad");
break;
case "Haryana":
document.contactform.district.options[0]=new Option("Select District","");
document.contactform.district.options[1]=new Option("Ambala","Ambala");
document.contactform.district.options[2]=new Option("Bhiwani","Bhiwani");
document.contactform.district.options[3]=new Option("Faridabad","Faridabad");
document.contactform.district.options[4]=new Option("Fatehabad","Fatehabad");
document.contactform.district.options[5]=new Option("Gurgaon","Gurgaon");
document.contactform.district.options[6]=new Option("Hissar","Hissar");
document.contactform.district.options[7]=new Option("Jhanjhar","Jhanjhar");
document.contactform.district.options[8]=new Option("Jind","Jind");
document.contactform.district.options[9]=new Option("Kaithal","Kaithal");
document.contactform.district.options[10]=new Option("Karnal","Karnal");
document.contactform.district.options[11]=new Option("Kurukshetra","Kurukshetra");
document.contactform.district.options[12]=new Option("Mahendragarh","Mahendragarh");
document.contactform.district.options[13]=new Option("Panchkula","Panchkula");
document.contactform.district.options[14]=new Option("Panipat","Panipat");
document.contactform.district.options[15]=new Option("Rewari","Rewari");
document.contactform.district.options[16]=new Option("Rohtak","Rohtak");
document.contactform.district.options[17]=new Option("Sirsa","Sirsa");
document.contactform.district.options[18]=new Option("Sonipat","Sonipat");
document.contactform.district.options[19]=new Option("Yamunanagar","Yamunanagar");
break;
case "Himachal Pradesh":
document.contactform.district.options[0]=new Option("Select District","");
document.contactform.district.options[1]=new Option("Bilaspur","Bilaspur");
document.contactform.district.options[2]=new Option("Chamba","Chamba");
document.contactform.district.options[3]=new Option("Hamirpur","Hamirpur");
document.contactform.district.options[4]=new Option("Kangra","Kangra");
document.contactform.district.options[5]=new Option("Kinnaur","Kinnaur");
document.contactform.district.options[6]=new Option("Kullu","Kullu");
document.contactform.district.options[7]=new Option("Lahaul-Spiti","Lahaul-Spiti");
document.contactform.district.options[8]=new Option("Mandi","Mandi");
document.contactform.district.options[9]=new Option("Shimla","Shimla");
document.contactform.district.options[10]=new Option("Sirmour","Sirmour");
document.contactform.district.options[11]=new Option("Solan","Solan");
document.contactform.district.options[12]=new Option("Una","Una");
break;
case "Jammu and Kashmir":
document.contactform.district.options[0]=new Option("Select District","");
document.contactform.district.options[1]=new Option("Anantnag","Anantnag");
document.contactform.district.options[2]=new Option("Badgan","Badgan");
document.contactform.district.options[3]=new Option("Baramula","Baramula");
document.contactform.district.options[4]=new Option("Doda","Doda");
document.contactform.district.options[5]=new Option("Jammu","Jammu");
document.contactform.district.options[6]=new Option("Kargi","Kargi");
document.contactform.district.options[7]=new Option("Kathua","Kathua");
document.contactform.district.options[8]=new Option("Kupwara","Kupwara");
document.contactform.district.options[9]=new Option("Leh","Leh");
document.contactform.district.options[10]=new Option("Poonch","Poonch");
document.contactform.district.options[11]=new Option("Pulwama","Pulwama");
document.contactform.district.options[12]=new Option("Rajauri","Rajauri");
document.contactform.district.options[13]=new Option("Srinagar","Srinagar");
document.contactform.district.options[14]=new Option("Udhampur","Udhampur");
break;
case "Jharkhand":
document.contactform.district.options[0]=new Option("Select District","");
document.contactform.district.options[1]=new Option("Bokaro","Bokaro");
document.contactform.district.options[2]=new Option("Chaibasa","Chaibasa");
document.contactform.district.options[3]=new Option("Chatra","Chatra");
document.contactform.district.options[4]=new Option("Deoghar","Deoghar");
document.contactform.district.options[5]=new Option("Dhanbad","Dhanbad");
document.contactform.district.options[6]=new Option("Dumka","Dumka");
document.contactform.district.options[7]=new Option("Garhwa","Garhwa");
document.contactform.district.options[8]=new Option("Giridih","Giridih");
document.contactform.district.options[9]=new Option("Godda","Godda");
document.contactform.district.options[10]=new Option("Gumla","Gumla");
document.contactform.district.options[11]=new Option("Hazaribagh","Hazaribagh");
document.contactform.district.options[12]=new Option("Jamshedpur","Jamshedpur");
document.contactform.district.options[13]=new Option("Jamtara","Jamtara");
document.contactform.district.options[14]=new Option("Koderma","Koderma");
document.contactform.district.options[15]=new Option("Latehar","Latehar");
document.contactform.district.options[16]=new Option("Lohardaga","Lohardaga");
document.contactform.district.options[17]=new Option("Pakur","Pakur");
document.contactform.district.options[18]=new Option("Palamu","Palamu");
document.contactform.district.options[19]=new Option("Ranchi","Ranchi");
document.contactform.district.options[20]=new Option("Sahebganj","Sahebganj");
document.contactform.district.options[21]=new Option("Saraikela","Saraikela");
document.contactform.district.options[22]=new Option("Simdega","Simdega");

break;
case "Karnataka":
document.contactform.district.options[0]=new Option("Select District","");
document.contactform.district.options[1]=new Option("BangaloreRural","BangaloreRural");
document.contactform.district.options[2]=new Option("BangaloreUrban","BangaloreUrban");
document.contactform.district.options[3]=new Option("Belgaum","Belgaum");
document.contactform.district.options[4]=new Option("Bellary","Bellary");
document.contactform.district.options[5]=new Option("Bidar","Bidar");
document.contactform.district.options[6]=new Option("Bijapur","Bijapur");
document.contactform.district.options[7]=new Option("Chamrajnagar","Chamrajnagar");
document.contactform.district.options[8]=new Option("Chickmagalur","Chickmagalur");
document.contactform.district.options[9]=new Option("Chitradurga","Chitradurga");
document.contactform.district.options[10]=new Option("DakshinaKannada","DakshinaKannada");
document.contactform.district.options[11]=new Option("Davanagare","Davanagare");
document.contactform.district.options[12]=new Option("Dharwad","Dharwad");
document.contactform.district.options[13]=new Option("Gadak","Gadak");
document.contactform.district.options[14]=new Option("Gulberga","Gulberga");
document.contactform.district.options[15]=new Option("Hassan","Hassan");
document.contactform.district.options[16]=new Option("Haveri","Haveri");
document.contactform.district.options[17]=new Option("Karwar","Karwar");
document.contactform.district.options[18]=new Option("Kolar","Kolar");
document.contactform.district.options[19]=new Option("Koppal","Koppal");
document.contactform.district.options[20]=new Option("Madikeri","Madikeri");
document.contactform.district.options[21]=new Option("Mandya","Mandya");
document.contactform.district.options[22]=new Option("Mysore","Mysore");
document.contactform.district.options[23]=new Option("Raichur","Raichur");
document.contactform.district.options[24]=new Option("Shimoga","Shimoga");
document.contactform.district.options[25]=new Option("Tumkur","Tumkur");
document.contactform.district.options[26]=new Option("Udupi","Udupi");
document.contactform.district.options[27]=new Option("Yadgir","Yadgir");
break;
case "Kerala":
document.contactform.district.options[0]=new Option("Select District","");
document.contactform.district.options[1]=new Option("Alapuzzha","Alapuzzha");
document.contactform.district.options[2]=new Option("Cannanore","Cannanore");
document.contactform.district.options[3]=new Option("Ernakulam","Ernakulam");
document.contactform.district.options[4]=new Option("Idukki","Idukki");
document.contactform.district.options[5]=new Option("Kasaragod","Kasaragod");
document.contactform.district.options[6]=new Option("Kottayam","Kottayam");
document.contactform.district.options[7]=new Option("Kozhikode","Kozhikode");
document.contactform.district.options[8]=new Option("Mallapuram","Mallapuram");
document.contactform.district.options[9]=new Option("Palghat","Palghat");
document.contactform.district.options[10]=new Option("Pathanamthitta","Pathanamthitta");
document.contactform.district.options[11]=new Option("Quilon","Quilon");
document.contactform.district.options[12]=new Option("Trichur","Trichur");
document.contactform.district.options[13]=new Option("Trivandrum","Trivandrum");
document.contactform.district.options[14]=new Option("Wayanad","Wayanad");
break;
case "Lakshadweep":
document.contactform.district.options[0]=new Option("Select District","");
break;
case "Madhya Pradesh":
document.contactform.district.options[0]=new Option("Select District","");
document.contactform.district.options[1]=new Option("Anooppur","Anooppur");
document.contactform.district.options[2]=new Option("Ashoknagar","Ashoknagar");
document.contactform.district.options[3]=new Option("Badwani","Badwani");
document.contactform.district.options[4]=new Option("Balaghat","Balaghat");
document.contactform.district.options[5]=new Option("Betul","Betul");
document.contactform.district.options[6]=new Option("Bhind","Bhind");
document.contactform.district.options[7]=new Option("Bhopal","Bhopal");
document.contactform.district.options[8]=new Option("Burhanpur","Burhanpur");
document.contactform.district.options[9]=new Option("Chhattarpur","Chhattarpur");
document.contactform.district.options[10]=new Option("Chhindwara","Chhindwara");
document.contactform.district.options[11]=new Option("Damoh","Damoh");
document.contactform.district.options[12]=new Option("Datia","Datia");
document.contactform.district.options[13]=new Option("Dewas","Dewas");
document.contactform.district.options[14]=new Option("Dhar","Dhar");
document.contactform.district.options[15]=new Option("Dindori","Dindori");
document.contactform.district.options[16]=new Option("Guna","Guna");
document.contactform.district.options[17]=new Option("Gwalior","Gwalior");
document.contactform.district.options[18]=new Option("Harda","Harda");
document.contactform.district.options[19]=new Option("Hoshangabad","Hoshangabad");
document.contactform.district.options[20]=new Option("Indore","Indore");
document.contactform.district.options[21]=new Option("Jabalpur","Jabalpur");
document.contactform.district.options[22]=new Option("Jhabua","Jhabua");
document.contactform.district.options[23]=new Option("Katni","Katni");
document.contactform.district.options[24]=new Option("Khandwa","Khandwa");
document.contactform.district.options[25]=new Option("Khargone","Khargone");
document.contactform.district.options[26]=new Option("Mandla","Mandla");
document.contactform.district.options[27]=new Option("Mandsaur","Mandsaur");
document.contactform.district.options[28]=new Option("Morena","Morena");
document.contactform.district.options[29]=new Option("Narsinghpur","Narsinghpur");
document.contactform.district.options[30]=new Option("Neemuch","Neemuch");
document.contactform.district.options[31]=new Option("Panna","Panna");
document.contactform.district.options[32]=new Option("Raisen","Raisen");
document.contactform.district.options[33]=new Option("Rajgarh","Rajgarh");
document.contactform.district.options[34]=new Option("Ratlam","Ratlam");
document.contactform.district.options[35]=new Option("Rewa","Rewa");
document.contactform.district.options[36]=new Option("Sagar","Sagar");
document.contactform.district.options[37]=new Option("Satna","Satna");
document.contactform.district.options[38]=new Option("Sehore","Sehore");
document.contactform.district.options[39]=new Option("Seoni","Seoni");
document.contactform.district.options[40]=new Option("Shahdol","Shahdol");
document.contactform.district.options[41]=new Option("Shajapur","Shajapur");
document.contactform.district.options[42]=new Option("Sheopur","Sheopur");
document.contactform.district.options[43]=new Option("Shivpuri","Shivpuri");
document.contactform.district.options[44]=new Option("Sindi","Sindi");
document.contactform.district.options[45]=new Option("Tikamgarh","Tikamgarh");
document.contactform.district.options[46]=new Option("Ujjain","Ujjain");
document.contactform.district.options[47]=new Option("Umaria","Umaria");
document.contactform.district.options[48]=new Option("Vidisha","Vidisha");
break;
case "Maharashtra":
document.contactform.district.options[0]=new Option("Select District","");
document.contactform.district.options[1]=new Option("Ahmednagar","Ahmednagar");
document.contactform.district.options[2]=new Option("Akola","Akola");
document.contactform.district.options[3]=new Option("Amravati","Amravati");
document.contactform.district.options[4]=new Option("Aurangabad","Aurangabad");
document.contactform.district.options[5]=new Option("Bandra","Bandra");
document.contactform.district.options[6]=new Option("Beed","Beed");
document.contactform.district.options[7]=new Option("Bhandara","Bhandara");
document.contactform.district.options[8]=new Option("Buldhana","Buldhana");
document.contactform.district.options[9]=new Option("Chandrapur","Chandrapur");
document.contactform.district.options[10]=new Option("Dhule","Dhule");
document.contactform.district.options[11]=new Option("Gadchiroli","Gadchiroli");
document.contactform.district.options[12]=new Option("Gondia","Gondia");
document.contactform.district.options[13]=new Option("Hingoli","Hingoli");
document.contactform.district.options[14]=new Option("Jalgaon","Jalgaon");
document.contactform.district.options[15]=new Option("Jalna","Jalna");
document.contactform.district.options[16]=new Option("Kolhpur","Kolhpur");
document.contactform.district.options[17]=new Option("Latur","Latur");
document.contactform.district.options[18]=new Option("Mumbai-City","Mumbai-City");
document.contactform.district.options[19]=new Option("Nagpur","Nagpur");
document.contactform.district.options[20]=new Option("Nanded","Nanded");
document.contactform.district.options[21]=new Option("Nandurbar","Nandurbar");
document.contactform.district.options[22]=new Option("Nashik","Nashik");
document.contactform.district.options[23]=new Option("Osmanabad","Osmanabad");
document.contactform.district.options[24]=new Option("Parbhani","Parbhani");
document.contactform.district.options[25]=new Option("Pune","Pune");
document.contactform.district.options[26]=new Option("Raigad","Raigad");
document.contactform.district.options[27]=new Option("Ratnagiri","Ratnagiri");
document.contactform.district.options[28]=new Option("Sangli","Sangli");
document.contactform.district.options[29]=new Option("Satara","Satara");
document.contactform.district.options[30]=new Option("Sholapur","Sholapur");
document.contactform.district.options[31]=new Option("Sindudurg","Sindudurg");
document.contactform.district.options[32]=new Option("Thane","Thane");
document.contactform.district.options[33]=new Option("Wardha","Wardha");
document.contactform.district.options[34]=new Option("Washim","Washim");
document.contactform.district.options[35]=new Option("Yavatmal","Yavatmal");
break;
case "Manipur":
document.contactform.district.options[0]=new Option("Select District","");
document.contactform.district.options[1]=new Option("Bishnupur","Bishnupur");
document.contactform.district.options[2]=new Option("Chandel","Chandel");
document.contactform.district.options[3]=new Option("Churachandpur","Churachandpur");
document.contactform.district.options[4]=new Option("Imphal East","Imphal East");
document.contactform.district.options[5]=new Option("Imphal West","Imphal West");
document.contactform.district.options[6]=new Option("Senapati","Senapati");
document.contactform.district.options[7]=new Option("Tamenglong","Tamenglong");
document.contactform.district.options[8]=new Option("Thoubal","Thoubal");
document.contactform.district.options[9]=new Option("Ukhrul","Ukhrul");
break;
case "Meghalaya":
document.contactform.district.options[0]=new Option("Select District","");
document.contactform.district.options[1]=new Option("East GaroHill","East Garo Hill");
document.contactform.district.options[2]=new Option("East KhasiHill","East Khasi Hill");
document.contactform.district.options[3]=new Option("Jaintia Hill","Jaintia Hill");
document.contactform.district.options[4]=new Option("Ri-Bhoi District","Ri-Bhoi District");
document.contactform.district.options[5]=new Option("South Garo Hills","South Garo Hills");
document.contactform.district.options[6]=new Option("West Garo Hill","West Garo Hill");
document.contactform.district.options[7]=new Option("West Khasi Hill","West Khasi Hill");
break;

case "Mizoram":
document.contactform.district.options[0]=new Option("Select District","");
document.contactform.district.options[1]=new Option("Aizawal","Aizawal");
document.contactform.district.options[2]=new Option("Champhai","Champhai");
document.contactform.district.options[3]=new Option("Chimtipui","Chimtipui");
document.contactform.district.options[4]=new Option("Kolasib","Kolasib");
document.contactform.district.options[5]=new Option("Lawngtlai","Lawngtlai");
document.contactform.district.options[6]=new Option("Luglei","Luglei");
document.contactform.district.options[7]=new Option("Mamit","Mamit");
document.contactform.district.options[8]=new Option("Serchhip","Serchhip");

break;
case "Nagaland":
document.contactform.district.options[0]=new Option("Select District","");
document.contactform.district.options[1]=new Option("Dimapur","Dimapur");
document.contactform.district.options[2]=new Option("Kohima","Kohima");
document.contactform.district.options[3]=new Option("Mokokchung","Mokokchung");
document.contactform.district.options[4]=new Option("Mon","Mon");
document.contactform.district.options[5]=new Option("Phek","Phek");
document.contactform.district.options[6]=new Option("Tuensang","Tuensang");
document.contactform.district.options[7]=new Option("Wokha","Wokha");
document.contactform.district.options[8]=new Option("Zunheboto","Zunheboto");

break;
case "Lakshdweep":
document.contactform.district.options[0]=new Option("Select District","");
document.contactform.district.options[0]=new Option("Lakshdweep","Lakshdweep");

break;
case "Orissa":

document.contactform.district.options[0]=new Option("Select District","");
document.contactform.district.options[1]=new Option("Angul","Angul");
document.contactform.district.options[2]=new Option("Balangir","Balangir");
document.contactform.district.options[3]=new Option("Balasore","Balasore");
document.contactform.district.options[4]=new Option("Bargah","Bargah");
document.contactform.district.options[5]=new Option("Bhadrak","Bhadrak");
document.contactform.district.options[6]=new Option("Boudh","Boudh");
document.contactform.district.options[7]=new Option("Cuttak","Cuttak");
document.contactform.district.options[8]=new Option("Deogarh","Deogarh");
document.contactform.district.options[9]=new Option("Dhenkanal","Dhenkanal");
document.contactform.district.options[10]=new Option("Gajapati","Gajapati");
document.contactform.district.options[11]=new Option("Ganjam","Ganjam");
document.contactform.district.options[12]=new Option("Jagatsinghpur","Jagatsinghpur");
document.contactform.district.options[13]=new Option("Jajpur","Jajpur");
document.contactform.district.options[14]=new Option("Jharsuguda","Jharsuguda");

document.contactform.district.options[15]=new Option("Kalhandi","Kalhandi");
document.contactform.district.options[16]=new Option("Kendrapara","Kendrapara");

document.contactform.district.options[17]=new Option("Keonjhar","Keonjhar");
document.contactform.district.options[18]=new Option("Khurda","Khurda");
document.contactform.district.options[19]=new Option("Koraput","Koraput");
document.contactform.district.options[20]=new Option("Malkangiri","Malkangiri");

document.contactform.district.options[21]=new Option("Mayurbhanj","Mayurbhanj");

document.contactform.district.options[22]=new Option("Navapada","Navapada");
document.contactform.district.options[23]=new Option("Navaragpur","Navaragpur");

document.contactform.district.options[24]=new Option("Nayagarh","Nayagarh");
document.contactform.district.options[25]=new Option("Phulbani","Phulbani");
document.contactform.district.options[26]=new Option("Puri","Puri");
document.contactform.district.options[27]=new Option("Rayagada","Rayagada");
document.contactform.district.options[28]=new Option("Sambalpur","Sambalpur");
document.contactform.district.options[29]=new Option("Sonepur","Sonepur");
document.contactform.district.options[30]=new Option("Sundergarh","Sundergarh");


break;
case "Pondichery":
document.contactform.district.options[0]=new Option("Select District","");
document.contactform.district.options[1]=new Option("Karikal","Karikal");
document.contactform.district.options[2]=new Option("Mahe","Mahe");
document.contactform.district.options[3]=new Option("Pondicherry","Pondicherry");
document.contactform.district.options[4]=new Option("Yaman","Yaman");
break;
case "Punjab":
document.contactform.district.options[0]=new Option("Select District","");
document.contactform.district.options[1]=new Option("Amritsar","Amritsar");
document.contactform.district.options[2]=new Option("Bhatinda","Bhatinda");
document.contactform.district.options[3]=new Option("Faridkot","Faridkot");
document.contactform.district.options[4]=new Option("FatehgarhSaheb","FatehgarhSaheb");
document.contactform.district.options[5]=new Option("Ferozepur","Ferozepur");
document.contactform.district.options[6]=new Option("Gurdaspur","Gurdaspur");
document.contactform.district.options[7]=new Option("Hosiarpur","Hosiarpur");
document.contactform.district.options[8]=new Option("Jalandhar","Jalandhar");
document.contactform.district.options[9]=new Option("Kapurthala","Kapurthala");
document.contactform.district.options[10]=new Option("Ludhiana","Ludhiana");
document.contactform.district.options[11]=new Option("Mansa","Mansa");
document.contactform.district.options[12]=new Option("Moga","Moga");
document.contactform.district.options[13]=new Option("Muktsar","Muktsar");
document.contactform.district.options[14]=new Option("Navansahar","Navansahar");
document.contactform.district.options[15]=new Option("Patiala","Patiala");
document.contactform.district.options[16]=new Option("Ropar","Ropar");
document.contactform.district.options[17]=new Option("Sangrur","Sangrur");

break;
case "Rajasthan":
document.contactform.district.options[0]=new Option("Select District","");
document.contactform.district.options[1]=new Option("Ajmer","Ajmer");
document.contactform.district.options[2]=new Option("Alwar","Alwar");
document.contactform.district.options[3]=new Option("Banswara","Banswara");
document.contactform.district.options[4]=new Option("Baran","Baran");
document.contactform.district.options[5]=new Option("Barmer","Barmer");
document.contactform.district.options[6]=new Option("Bharatpur","Bharatpur");
document.contactform.district.options[7]=new Option("Bhilwara","Bhilwara");
document.contactform.district.options[8]=new Option("Bikaner","Bikaner");
document.contactform.district.options[9]=new Option("Bundi","Bundi");
document.contactform.district.options[10]=new Option("Chittorgarh","Chittorgarh");
document.contactform.district.options[11]=new Option("Churu","Churu");
document.contactform.district.options[12]=new Option("Dausa","Dausa");
document.contactform.district.options[13]=new Option("Dholpur","Dholpur");
document.contactform.district.options[14]=new Option("Dungarpur","Dungarpur");
document.contactform.district.options[15]=new Option("Ganganagar","Ganganagar");
document.contactform.district.options[16]=new Option("Hanumangarh","Hanumangarh");
document.contactform.district.options[17]=new Option("Jaipur","Jaipur");
document.contactform.district.options[18]=new Option("Jaisalmer","Jaisalmer");
document.contactform.district.options[19]=new Option("Jalor","Jalor");
document.contactform.district.options[20]=new Option("Jhalawar","Jhalawar");
document.contactform.district.options[21]=new Option("Jhunjhunu","Jhunjhunu");
document.contactform.district.options[22]=new Option("Jodhpur","Jodhpur");
document.contactform.district.options[23]=new Option("Karauli","Karauli");
document.contactform.district.options[24]=new Option("Kota","Kota");
document.contactform.district.options[25]=new Option("Nagaur","Nagaur");
document.contactform.district.options[26]=new Option("Pali","Pali");
document.contactform.district.options[27]=new Option("Rajsamand","Rajsamand");
document.contactform.district.options[28]=new Option("SawaiMadhopur","SawaiMadhopur");
document.contactform.district.options[29]=new Option("Sikar","Sikar");
document.contactform.district.options[30]=new Option("Sirohi","Sirohi");
document.contactform.district.options[31]=new Option("Tonk","Tonk");
document.contactform.district.options[32]=new Option("Udaipur","Udaipur");

break;
case "Sikkim":
document.contactform.district.options[0]=new Option("Select District","");
document.contactform.district.options[1]=new Option("East","East");
document.contactform.district.options[2]=new Option("North","North");
document.contactform.district.options[3]=new Option("South","South");
document.contactform.district.options[4]=new Option("West","West");

break;
case "Tamil Nadu":
document.contactform.district.options[0]=new Option("Select District","");
document.contactform.district.options[1]=new Option("Chennai","Chennai");
document.contactform.district.options[2]=new Option("Coimbotore","Coimbotore");
document.contactform.district.options[3]=new Option("Cuddalorei","Cuddalorei");
document.contactform.district.options[4]=new Option("Dharmapuri","Dharmapuri");
document.contactform.district.options[5]=new Option("Dindigul","Dindigul");
document.contactform.district.options[6]=new Option("Erode","Erode");
document.contactform.district.options[7]=new Option("Kancheepuram","Kancheepuram");
document.contactform.district.options[8]=new Option("Kanniyakumari","Kanniyakumari");
document.contactform.district.options[9]=new Option("Karur","Karur");
document.contactform.district.options[10]=new Option("Madurai","Madurai");
document.contactform.district.options[11]=new Option("Nagapattinam","Nagapattinam");
document.contactform.district.options[12]=new Option("Namakkal","Namakkal");
document.contactform.district.options[13]=new Option("Nilgiris","Nilgiris");
document.contactform.district.options[14]=new Option("Perambalur","Perambalur");
document.contactform.district.options[15]=new Option("Pudukkottai","Pudukkottai");
document.contactform.district.options[16]=new Option("Ramanathapuram","Ramanathapuram");
document.contactform.district.options[17]=new Option("Salem","Salem");
document.contactform.district.options[18]=new Option("Sivaganga","Sivaganga");
document.contactform.district.options[19]=new Option("Thanjavur","Thanjavur");
document.contactform.district.options[20]=new Option("Theni","Theni");
document.contactform.district.options[21]=new Option("Thoothkudi","Thoothkudi");
document.contactform.district.options[22]=new Option("Tiruchiorappalli","Tiruchiorappalli");
document.contactform.district.options[23]=new Option("Tirunelveli","Tirunelveli");
document.contactform.district.options[24]=new Option("Tiruvallur","Tiruvallur");
document.contactform.district.options[25]=new Option("Tiruvannamalai","Tiruvannamalai");
document.contactform.district.options[26]=new Option("Tiruvarur","Tiruvarur");
document.contactform.district.options[27]=new Option("Vellore","Vellore");
document.contactform.district.options[28]=new Option("Villupuram","Villupuram");
document.contactform.district.options[29]=new Option("Virudhunagar","Virudhunagar");

break;
case "Tripura":


document.contactform.district.options[0]=new Option("Select District","");
document.contactform.district.options[1]=new Option("Dhalai District","Dhalai District");
document.contactform.district.options[2]=new Option("North District","North District");
document.contactform.district.options[3]=new Option("South District","South District");
document.contactform.district.options[4]=new Option("West District","West District");

break;
case "Uttar Pradesh":
document.contactform.district.options[0]=new Option("Select District","");
document.contactform.district.options[1]=new Option("Agra","Agra");
document.contactform.district.options[2]=new Option("Aligarh","Aligarh");
document.contactform.district.options[3]=new Option("Allahabad","Allahabad");
document.contactform.district.options[4]=new Option("Ambedkarnagar","Ambedkarnagar");
document.contactform.district.options[5]=new Option("Azamgarh","Azamgarh");
document.contactform.district.options[6]=new Option("Bagpat","Bagpat");
document.contactform.district.options[7]=new Option("Bahraich","Bahraich");
document.contactform.district.options[8]=new Option("Balia","Balia");
document.contactform.district.options[9]=new Option("Balrampur","Balrampur");
document.contactform.district.options[10]=new Option("Banda","Banda");
document.contactform.district.options[11]=new Option("Barabanki","Barabanki");
document.contactform.district.options[12]=new Option("Bareilly","Bareilly");
document.contactform.district.options[13]=new Option("Basti","Basti");
document.contactform.district.options[14]=new Option("Bhadoi","Bhadoi");
document.contactform.district.options[15]=new Option("Bijnor","Bijnor");
document.contactform.district.options[16]=new Option("Budaun","Budaun");
document.contactform.district.options[17]=new Option("Bulandshehar","Bulandshehar");
document.contactform.district.options[18]=new Option("Chandauli","Chandauli");
document.contactform.district.options[19]=new Option("Deoria","Deoria");
document.contactform.district.options[20]=new Option("Etah","Etah");
document.contactform.district.options[21]=new Option("Etawah","Etawah");
document.contactform.district.options[22]=new Option("Faizabad","Faizabad");
document.contactform.district.options[23]=new Option("Farrukhabad","Farrukhabad");
document.contactform.district.options[24]=new Option("Fatehpur","Fatehpur");
document.contactform.district.options[25]=new Option("Firozabad","Firozabad");
document.contactform.district.options[26]=new Option("GautamBoddaNagar","GautamBoddaNagar");
document.contactform.district.options[27]=new Option("Gazipur","Gazipur");
document.contactform.district.options[28]=new Option("Ghaziabad","Ghaziabad");
document.contactform.district.options[29]=new Option("Gonda","Gonda");
document.contactform.district.options[30]=new Option("Gorakpur","Gorakpur");
document.contactform.district.options[31]=new Option("Hamirpur","Hamirpur");
document.contactform.district.options[32]=new Option("Hardoi","Hardoi");
document.contactform.district.options[33]=new Option("Jalaun","Jalaun");
document.contactform.district.options[34]=new Option("Jaunpur","Jaunpur");
document.contactform.district.options[35]=new Option("Jhansi","Jhansi");
document.contactform.district.options[36]=new Option("Kanooj","Kanooj");
document.contactform.district.options[37]=new Option("Kanpur","Kanpur");
document.contactform.district.options[38]=new Option("KanpurDehat","KanpurDehat");
document.contactform.district.options[39]=new Option("Kaushambi","Kaushambi");
document.contactform.district.options[40]=new Option("Lakhimpur-Khedi","Lakhimpur-Khedi");
document.contactform.district.options[41]=new Option("Lalitpur","Lalitpur");
document.contactform.district.options[42]=new Option("Lucknow","Lucknow");
document.contactform.district.options[43]=new Option("MahaMayaNagar","MahaMayaNagar");
document.contactform.district.options[44]=new Option("Maharajganj","Maharajganj");
document.contactform.district.options[45]=new Option("Mahoba","Mahoba");
document.contactform.district.options[46]=new Option("Mainpuri","Mainpuri");
document.contactform.district.options[47]=new Option("Mathura","Mathura");
document.contactform.district.options[48]=new Option("Mau","Mau");
document.contactform.district.options[49]=new Option("Meerut","Meerut");
document.contactform.district.options[50]=new Option("Mirzapur","Mirzapur");
document.contactform.district.options[51]=new Option("Moradabad","Moradabad");
document.contactform.district.options[52]=new Option("MuzaffarNagar","MuzaffarNagar");
document.contactform.district.options[53]=new Option("Oraiyya","Oraiyya");
document.contactform.district.options[54]=new Option("Padrauna","Padrauna");
document.contactform.district.options[55]=new Option("Pilibhit","Pilibhit");
document.contactform.district.options[56]=new Option("Pratapgarh","Pratapgarh");
document.contactform.district.options[57]=new Option("Raebareili","Raebareili");
document.contactform.district.options[58]=new Option("Rampur","Rampur");
document.contactform.district.options[59]=new Option("Saharanpur","Saharanpur");
document.contactform.district.options[60]=new Option("Sant Kabir Nagar","Sant Kabir Nagar");
document.contactform.district.options[61]=new Option("Shahjahanpur","Shahjahanpur");
document.contactform.district.options[62]=new Option("ShoojiMaharaj","Shooji Maharaj");
document.contactform.district.options[63]=new Option("Shravati","Shravati");
document.contactform.district.options[64]=new Option("Siddharth Nagar","Siddharth Nagar");
document.contactform.district.options[65]=new Option("Sitapur","Sitapur");
document.contactform.district.options[66]=new Option("Sultanpur","Sultanpur");
document.contactform.district.options[67]=new Option("Sunbhadra","Sunbhadra");
document.contactform.district.options[68]=new Option("Unnav","Unnav");
document.contactform.district.options[69]=new Option("Varanasi","Varanasi");
document.contactform.district.options[70]=new Option("JyotibaPhooleNagar","JyotibaPhooleNagar");

break;
case Uttaranchal:
document.contactform.district.options[0]=new Option("Select District","");
document.contactform.district.options[1]=new Option("Almora","Almora");
document.contactform.district.options[2]=new Option("Bageshwar","Bageshwar");
document.contactform.district.options[3]=new Option("Chamoli","Chamoli");
document.contactform.district.options[4]=new Option("Champawat","Champawat");
document.contactform.district.options[5]=new Option("Dehradun","Dehradun");
document.contactform.district.options[6]=new Option("Garhwal","Garhwal");
document.contactform.district.options[7]=new Option("Haridwar","Haridwar");
document.contactform.district.options[8]=new Option("Nainital","Nainital");
document.contactform.district.options[9]=new Option("Pitoragarh","Pitoragarh");
document.contactform.district.options[10]=new Option("Rudraprayag","Rudraprayag");
document.contactform.district.options[11]=new Option("Tehri-Garhwal","Tehri-Garhwal");
document.contactform.district.options[12]=new Option("UdhamsinghNagar","UdhamsinghNagar");
document.contactform.district.options[13]=new Option("Uttarkashi","Uttarkashi");
break;
case "West bengal":

document.contactform.district.options[0]=new Option("Select District","");
document.contactform.district.options[1]=new Option("Bankura","Bankura");
document.contactform.district.options[2]=new Option("Bardhaman","Bardhaman");
document.contactform.district.options[3]=new Option("Birbhum","Birbhum");
document.contactform.district.options[4]=new Option("Coochbehar","Coochbehar");
document.contactform.district.options[5]=new Option("DakshinDinajpur","DakshinDinajpur");
document.contactform.district.options[6]=new Option("Darjeeling","Darjeeling");
document.contactform.district.options[7]=new Option("Hooghly","Hooghly");
document.contactform.district.options[8]=new Option("Howrah","Howrah");
document.contactform.district.options[9]=new Option("Jalpaiguri","Jalpaiguri");
document.contactform.district.options[10]=new Option("Malda","Malda");
document.contactform.district.options[11]=new Option("Medinipur","Medinipur");
document.contactform.district.options[12]=new Option("Murshidabad","Murshidabad");
document.contactform.district.options[13]=new Option("Nadia","Nadia");
document.contactform.district.options[14]=new Option("North24Parganas","North24Parganas");
document.contactform.district.options[15]=new Option("Purulia","Purulia");
document.contactform.district.options[16]=new Option("Siliguri","Siliguri");
document.contactform.district.options[17]=new Option("South24Parganas","South24Parganas");
document.contactform.district.options[18]=new Option("UttarDinajpur","UttarDinajpur");

break;
}
return true;
}
</script>
	
</head>
<!--==============================header=================================-->
<body id="page3">
<br>
<header>
<header>
  <div class="border-bothome">
  <div id="wc-container">
	<div id="wc-header">
		<div id="logo">
			<a href="homepagelogin.html"><img src="images/bloodlogo1.png" alt=""></a>
		</div>
		
			<div class="wc-login">
			<table style="width:64%">
			<tr>
			<td>
<a href="viewprofile.php" 
style="font-style:bold;text-decoration:none;color:red;font-size:16px;position:relative;left:9px;">View Profile</a></td>
			<td>|</td><td>
<a href="edit.php" 
style="font-style:bold;text-decoration:none;color:red;font-size: 16px;position:relative;left: 9px;">Edit Profile</a></td>
		<td>|</td>	<td>
<a href="logout.php" style="font-style:bold;text-decoration:none;color:red;font-size:16px;position: relative;left: 9px;">Logout</a></td></tr>
			
			</table>
			
		
		</div>
		</div>
    </div>
	<div id="nav-main">
			<ul>
				 <li><a  href="homepagelogin.html">HOME</a></li>
          <li><a href="Eligibilitylogin.html">ELIGIBILITY</a></li>
		  <li><a href="Bloodbankslogin.html">BLOOD BANKS</a></li>
		  <li><a href="Registerlogin.php">REGISTER</a></li>
          <li><a href="Searchlogin.html">SEARCH</a></li>
		  <li><a href="postlogin.html">POST</a></li>
          <li ><a href="Bloodfactslogin.html">BLOOD FACTS</a></li>
          <li class="nav-last" ><a href="viewpostlogin.php">VIEW POST</a></li>
			                                                                 
			</ul>
		 </div>
		  <div class="clear"></div>
    </div>
  </div>	
</header>
<!--==============================content================================-->
<div class="container">
<br>
<center>    <p style="text-align:center;color:blue;font-style:italic;font-size:30px">Profile Details</p>  </center>
<br>
<div  class="form">
<form id="contactform"  name="contactform" method="post" action="update.php"> 

<?php
 			
$connect=mysql_connect("localhost","root","")or die("Could not connect to the server");
$db=mysql_select_db("blooddonors",$connect)or die("could not select database");
$query="SELECT * FROM login";
$result=mysql_query($query)or die("Query failed=".mysql_error());

$flag=0;			
while($row11=mysql_fetch_array($result))
{
	$row12=$row11;
}	

$query1="SELECT * FROM register";
$result1=mysql_query($query1)or die("Query failed=".mysql_error());

while($row=mysql_fetch_array($result1))
{
	if($row['donorid']==$row12['did'])
	{
		break;
	}
	
}		echo "<input id='did' name='did' type='hidden' value=".$row["donorid"].">";
$v4=$row["name"];
$v4=str_replace(" ","_",$v4);	

		echo "<label style='font-size:20px'>Personal Details</label><br><br><p class='contact'><label for='name'>Name*</label></p> 
    			<input id='fullname' name='name' placeholder='Name' value=".$v4." required='' type='text'>"; 
    			
		echo   "<p class='contact'><label for='age'>Age*</label></p> 
    			<input id='age' name='age' placeholder='Age' min='18' required='' value=".$row["age"]." type='number'>";
				
    	echo   "<p class='contact'><label for='weight'>Weight*</label></p> 
    			<input id='weight' name='weight' placeholder='Weight' min='50' required=''value=".$row["weight"]." type='number'>";
    			
		echo "<p class='contact'><label for='dob'>Date Of Birth*</label></p> 
    			<input id='dob' name='dob' placeholder='Date Of Birth' required='' value=".$row["dob"]." type='date'><br>";
				
		echo	"<p class='contact'><label for='dob'>Last Donation made on</label></p> 
    			<input id='ldate' name='ldate' placeholder='Donated date' value=".$row["lastdonate"]." type='date'> 
				<br>";
				
	if($row["gender"]=="male")		
	{
			echo "<label>Gender*</label><br>	
			<select class='select-style gender' name='gender'>
			<option value=".$row["gender"].">".$row["gender"]."</option>
		    <option value='female'>female</option>
            </select><br><br>";
	}
	else
	{
			echo "<label>Gender*</label><br>	
			<select class='select-style gender' name='gender'>
			<option value='male'>male</option>
			<option value=".$row["gender"].">".$row["gender"]."</option>
		    </select><br><br>";
	}	
            
		echo"<label>Blood Group*</label><br>	
			<select class='select-style bloodgrp' name='bloodgrp'>
            <option value=".$row["bloodgrp"].">".$row["bloodgrp"]."</option>
			<option value='A+'>A+</option>
            <option value='A-'>A-</option>
            <option value='B+'>B+</option>
            <option value='B-'>B-</option>
            <option value='O+'>O+</option>
            <option value='O-'>O-</option>
            <option value='AB+'>AB+</option>
            <option value='AB-'>AB-</option>
            <option value='A1+'>A1+</option>
            <option value='A1-'>A1-</option>
            <option value='A2+'>A2+</option>
            <option value='A2-'>A2-</option>
            <option value='A1B+'>A1B+</option>
            <option value='A1B-'>A1B-</option>
            <option value='A2B+'>A2B+</option>
            <option value='A2B-'>A2B-</option>
    		</select><br><br>";
            	
			echo "<label style='font-size:20px'>Contact Details</label><br><br>		
				<p class='contact'><label for='mobileno'>Mobile Phone*</label></p> 
    			<input id='mobileno' name='mobileno' placeholder='Mobile Phone' data-validate-length-range='10,20' required='' value=".$row["mobno"]." type='number'>"; 
				
			echo "<p class='contact'><label for='officeno'>Office Phone</label></p> 
    	<input id='officeno' name='officeno' placeholder='Office Phone'maxlength='10' type='number' data-validate-length-range='10,20' value=".$row["offno"]." > 
				<br>";
				
			$v1=$row["email"];
			$v1=str_replace(" ","_",$v1);	
    		echo "<p class='contact'><label for='email'>Email</label></p> 
    			<input id='email' name='email' placeholder='example@domain.com'value=".$v1." type='text'> 
				<br>";

$v2=$row["state"];
$v2=str_replace(" ","_",$v2);	
				
			echo "<label style='font-size:20px'>Location Details</label><br><br>		
				
				<label>State*</label><br>	
<select class='select-style bloodgrp' id='state' name='state' onchange='javascript:dropdownlist(this.options[this.selectedIndex].value);'>
                     <option selected value=".$v2.">".$v2."</option>
            
                     <option value='Andaman and Nicobar'>Andaman and Nicobar</option>
                                            <option value='Andhra Pradesh'>
                      Andhra Pradesh                      </option>
                                            <option value='Arunachal Pradesh'>
                      Arunachal Pradesh                      </option>
                                            <option value='Assam'>
                      Assam                      </option>
                                            <option value='Bihar'>
                      Bihar                      </option>
                                            <option value='Chandigarh'>
                      Chandigarh                      </option>
                                            <option value='Chattisgarh'>
                      Chattisgarh                      </option>
                                            <option value='Dadra and Nagar'>
                      Dadra and Nagar                      </option>
                                        <option value='Daman and Diu'>
                      Daman and Diu                      </option>
                                            <option value='Delhi'>
                      Delhi                      </option>
                                            <option value='Goa'>
                      Goa                      </option>
                                            <option value='Gujarat'>
                      Gujarat                      </option>
                                            <option value='Haryana'>
                      Haryana                      </option>
                                            <option value='Himachal Pradesh'>
                      Himachal Pradesh                      </option>
                                            <option value='Jammu and Kashmir'>
                      Jammu and Kashmir                      </option>
                                            <option value='Jharkhand'>
                      Jharkhand                      </option>
                                            <option value='Karnataka'>
                      Karnataka                      </option>
                                            <option value='Kerala'>
                      Kerala                      </option>
                                            <option value='Lakshdweep '>
                      Lakshdweep                      </option>
                                            <option value='Madhya Pradesh'>
                      Madhya Pradesh                      </option>
                                            <option value='Maharashtra'>
                      Maharashtra                      </option>
                                            <option value='Manipur'>
                      Manipur                      </option>
                                            <option value='Meghalaya'>
                      Meghalaya                      </option>
                                            <option value='Mizoram'>
                      Mizoram                      </option>
                                            <option value='Nagaland'>
                      Nagaland                      </option>
                                            <option value='Orissa'>
                      Orissa                      </option>
                                            <option value='Pondichery'>
                      Pondichery                      </option>
                                            <option value='Punjab'>
                      Punjab                      </option>
                                            <option value='Rajasthan'>
                      Rajasthan                      </option>
                                            <option value='Sikkim'>
                      Sikkim                      </option>
                                            <option value='Tamil Nadu'>
                      Tamil Nadu                      </option>
                                            <option value='Tripura'>
                      Tripura                      </option>
                                            <option value='Uttar Pradesh'>
                      Uttar Pradesh                      </option>
                                            <option value='Uttaranchal'>
                      Uttaranchal                      </option>
                                            <option value='West Bengal'>
                      West Bengal                      </option>
                                    </select><br><br>";
            
$v3=$row["district"];
$v3=str_replace(" ","_",$v3);	

 echo "<label>District*</label><br>	
 <script type='text/javascript' language='JavaScript'>
 document.write('<select  id='district'  name='district' class='select-style bloodgrp'><option value=".$v3.">".$v3."</option></select>')
 </script>
 <select name='district' id='district' class='select-style bloodgrp'>
 <option value=".$v3.">".$v3."</option>
 </select>
 <br><br>";
$v6=$row["location"];
$v6=str_replace(" ","_",$v6);	
$v=$row["streetname"];
$v=str_replace(" ","_",$v);	
			echo "<p class='contact'><label for='location'>Location*</label></p> 
    			<input id='location' name='location' placeholder='Location' required='' type='text' value=".$v6." > 
				<p class='contact'><label for='streetname'>Street name*</label></p> 
    			<input id='streetname' name='streetname' placeholder='Street name' required='' type='text' value=".$v."> 
				<br>";
    		   echo "<label style='font-size:20px'>Login Details</label><br><br>";		
			   echo "<p class='contact'><label for='username'>Username*</label></p> 
    			<input id='username' name='username' placeholder='username' minlength='5'  required='' tabindex='15'  value=".$row["username"]." type='text'>"; 
    			echo" 
                <p class='contact'><label for='password'>Password*</label></p> 
    			<input type='password' id='password' name='password' minlength='5' tabindex='16' required='' value=".$row["password"]."> ";
                echo "
				<p class='contact'><label for='repassword'>Confirm password*</label></p> 
    			<input type='password' id='repassword' name='repassword' minlength='5' tabindex='17' required=''value=".$row["password"]."> 
				
				<br>";
			/*	echo "<p class='code'><label for='code'>Enter the code</label></p> ";
    			*/
				echo "<table style='width:50%'>";
				/*<tr>
				<td>
				<input id='code' class='codetxt' name='code' width='10px' placeholder='code' required='' tabindex='18' type='text'> 
				</td>
				<td><img src='./css/captcha.php' class='captcha' alt='' style='width:125px;height:29px;'>
				<br>
				</td>
				</tr>*/
				echo "<tr>
				<td>
				<input class='buttom' name='submit' id='submit' tabindex='16' value='Update' type='submit' > </td> </tr>
				</table>";
										
?>

</form> 
</div>
</div>
<br><br><br>

</div>
<!--==============================footer=================================-->
<br><br>


<footer>
  <div class="main">
    <div class="container_12">
      <div class="wrapper">
        <div class="grid_3">
          <div class="spacer-1"> <a href="homepagelogin.html"><img src="images/footerlogo.png" alt=""></a> </div>
        </div>
        <div class="grid_5">
          <div class="indent-top2">
            <p class="prev-indent-bot">&copy; 2015 Website Template by <a target="_blank" href="#">Sharmila</a></p>Mail us @: <a href="http://www.gmail.com">onlineblooddonors@gmail.com</a> </div>
        </div>
        <div class="grid_4">
          <ul class="list-services">
            <li><a class="item-1" href="#"></a></li>
            <li><a class="item-2" href="#"></a></li>
            <li><a class="item-3" href="#"></a></li>
            <li><a class="item-4" href="#"></a></li>
          </ul>
          <span class="footer-text">&copy; 2015 <a class="link color-2" href="#">Privacy Policy</a></span> </div>
      </div>
    </div>
  </div>
</footer>
<script>Cufon.now();</script>
<script>
$(window).load(function() {
	$('.slider')._TMS({
		duration:1000,
		easing:'easeOutQuint',
		preset:'diagonalFade',
		slideshow:7000,
		banners:false,
		pauseOnHover:true,
		pagination:true,
		pagNums:false
	});
});
</script>
<div align=center>Donate Blood Save Life</div></body>
</html>
