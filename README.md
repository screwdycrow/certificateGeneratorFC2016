# Certificate Generator for FC2016

This is the custom php code used to generate the certificates for the 9nth Fosscomm that took place on University of Piraeus,
and hosted by Software Libre Society. 

## The Basic Idea
The basic idea was to create a table into the website's database, the sql needed for that can be found inside the ```certificates.sql```, and after that import this php script onto a directory named certificates inside a  wordpress installation. 

After that we generated a csv document with the person names and the type of certificate that each person should recieve, we generated a token to be used to  construct a unique url for each user, we uploaded the. Then we send the url to each user and passed the token as paramereter, which we used as authentication. 

The user the later could download the generated document. If the user had register more than one person  with the same e-mail, then he/she would recieved the other documents as different page.

## Libraries Used
For the pdf generation we used the open source pdf library: tFPDF which is a a version of FPDF that supports UTF-8 characters.  
http://fpdf.org/fr/script/script92.php

The FPDF website:
http://www.fpdf.org/

considering the fact that this is a pretty old php library, you can also look at a more recent project, based on fpdf: 
https://github.com/mpdf/mpdf


## Important
Please not that this is a quick and perhaps "dirty" solution that worked for our case. It will most propably not work out of the box for anyone else. But feel free to customize it on your need. There was a thought, at some point, to make this a more complete solution by including a ui interface for imports. But right now this is all we have :)  

## About Fosscomm 
Fosscomm is a annuall conference about free and open source software, that takes hold on various universities in Greece and organized by Foss-enthusiasts students or Foss stundent communities. The funds are gathered solely by donations. The last Fosscomm , 10th in number , took place on Harokopeion University on Athens November 2017. Fosscomm is perhaps the largest FOSS conference in Greece. 
