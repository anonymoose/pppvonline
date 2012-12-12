//store the quotations in arrays
quotes = new Array();
authors = new Array();
quotes[0] = "I had no idea that going to a doctor could lead to the realization of a dream. But you proved that physicians can do more than heal. Because of your guidance and inspiration, I have a full scholarship for advanced instruction on the cello. Thank you from the bottom of my heart.";
authors[0] = "<i>Johnathon, former patient.</i>";
quotes[1] = "The relationship between a pediatrician and a family is that of a team, working together toward a common goal.";
authors[1] = "<i>Dr. Buckley</i>";




//calculate a random index
index = Math.floor(Math.random() * quotes.length);

//display the quotation
document.write("<DL>\n");
document.write("<DT>" + "\"" + quotes[index] + "\"\n");
document.write("<DD>" + "&mdash;" + authors[index] + "\n");
document.write("</DL>\n");

//done
