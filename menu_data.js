


_menuCloseDelay=500           // The time delay for menus to remain visible on mouse out
_menuOpenDelay=750            // The time delay before menus open on mouse over
_followSpeed=5                // Follow scrolling speed
_followRate=40                // Follow scrolling Rate
_subOffsetTop=10              // Sub menu top offset
_subOffsetLeft=-10            // Sub menu left offset
_scrollAmount=3               // Only needed for Netscape 4.x
_scrollDelay=20               // Only needed for Netcsape 4.x




with(menuStyle=new mm_style()){
horizontalMenuDelay = true;
onbgcolor="#666666";
oncolor="#ffffcc";
offbgcolor="#ffffff";
offcolor="#000000";
bordercolor="#000000";
borderstyle="solid";
borderwidth=0;
separatorcolor="#000000";
separatorsize="1";
padding=3;
fontsize="11px";
fontweight="bold";
fontstyle="normal";
fontfamily="Verdana, Tahoma, Arial";
pagecolor="black";
pagebgcolor="#ffffcc";
headercolor="#000000";
headerbgcolor="#ffffff";
subimage="http://www.pppvonline.com/arrow.gif";
subimagepadding="2";
ondecoration='none';
align="center";
bgimage="http://www.pppvonline.com/images/golden.gif";
subborderwidth="1";


// overfilter="Fade(duration=0.2);Alpha(opacity=90);Shadow(color='#777777', Direction=135, Strength=5)";
// outfilter="randomdissolve(duration=0.3)";
}

with(subStyle=new mm_style()){
horizontalMenuDelay = true;
onbgcolor="#666666";
oncolor="#ffffcc";
offbgcolor="#ffffff";
offcolor="#000000";
bordercolor="#000000";
borderstyle="solid";
borderwidth=1;
separatorcolor="#000000";
separatorsize="1";
padding=3;
fontsize="11px";
fontweight="bold";
fontstyle="normal";
fontfamily="Verdana, Tahoma, Arial";
pagecolor="black";
pagebgcolor="#ffffcc";
headercolor="#000000";
headerbgcolor="#ffffff";
subimage="http://www.pppvonline.com/arrow-right.gif";
subimagepadding="2";
ondecoration='none';
align="center";
bgimage="http://www.pppvonline.com/images/golden.gif";
subborderwidth="1";


// overfilter="Fade(duration=0.2);Alpha(opacity=90);Shadow(color='#777777', Direction=135, Strength=5)";
// outfilter="randomdissolve(duration=0.3)";
}


with(milonic=new menuname("Main Menu")){
style=menuStyle;
itemheight=20;
//itemwidth=120;
screenposition="center"
top=249;

//menuwidth="100%";
menualign="";
alwaysvisible=1;


orientation="horizontal";
aI("text=Directions;url=http://www.pppvonline.com/directions.htm;");
aI("text=New Patient Intake Form;url=http://www.pppvonline.com/form1.php;");
//aI("text=Office;showmenu=office;");
//aI("text=Become a Patient;showmenu=patient;");
//aI("text=Local Resouces;showmenu=local;");
//aI("text=Directions;showmenu=directions;");
//aI("text=Literature;url=http://www.ppponline.come/literature.htm;");
//aI("text=Links;url=http://www.ppponline.come/links.htm;");

}


with(milonic=new menuname("office")){
style=subStyle;
overflow="scroll";
aI("text=Directions;showmenu=directions;");
aI("text=Policies;url=http://www.ppponline.come/policies.htm;");
aI("text=About Dr. Buckley;url=http://www.ppponline.come/bio.htm;");
aI("text=Services;url=http://www.ppponline.come/services.htm;");
}

with(milonic=new menuname("patient")){
style=subStyle;
overflow="scroll";
aI("text=Informed Consent;url=http://www.ppponline.come/consent.htm;");
aI("text=Routine Care;url=http://www.ppponline.come/routinecare.htm;");
aI("text=ASD Consultation;url=http://www.ppponline.come/ASD.htm;");
aI("text=Directions;showmenu=directions;");
}

with(milonic=new menuname("local")){
style=subStyle;
overflow="scroll";
aI("text=HEAL!;url=http://www.ppponline.come/heal.htm;");
aI("text=AMEN!;url=http://www.ppponline.come/amen.htm;");
aI("text=Buying Food;url=http://www.ppponline.come/food.htm;");
aI("text=Restaurants;url=http://www.ppponline.come/restaurants.htm;");
aI("text=Support;showmenu=support;");
}

with(milonic=new menuname("support")){
style=subStyle;
overflow="scroll";
aI("text=ASA;url=http://www.ppponline.come/ASA.htm;");
aI("text=Autism Links;url=http://www.ppponline.come/links.htm;");
aI("text=Moms of Hope;url=http://www.ppponline.come/moh.htm;");
}

with(milonic=new menuname("directions")){
style=subStyle;
overflow="scroll";
aI("text=Local;url=http://www.ppponline.come/directions.htm#local;");
aI("text=Airport;url=http://www.ppponline.come/directions.htm#air;");

}

drawMenus();

