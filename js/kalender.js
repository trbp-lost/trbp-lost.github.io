<!-- Ichal
namabulan = new Array(
"Januari",
"Februari",
"Maret",
"April",
"Mei",
"Juni",
"Juli",
"Agustus",
"September",
"Oktober",
"Nopember",
"Desember");
var jumlahlink=0;
function tambahlink(bulan, hari, href) {
var masuk = new Array(3);
masuk[0] = bulan;
masuk[1] = hari;
masuk[2] = href;
this[jumlahlink++] = masuk;
}
Array.prototype.tambahlink = tambahlink;
linkdays = new Array();
monthdays = new Array(12);
monthdays[0]=31;
monthdays[1]=28;
monthdays[2]=31;
monthdays[3]=30;
monthdays[4]=31;
monthdays[5]=30;
monthdays[6]=31;
monthdays[7]=31;
monthdays[8]=30;
monthdays[9]=31;
monthdays[10]=30;
monthdays[11]=31;
todayDate=new Date();
hariini=todayDate.getDay();
bulanini=todayDate.getMonth();
tanggalsekarang=todayDate.getDate();
tahunini=todayDate.getYear();
tahunini = tahunini % 100;
tahunini = ((tahunini < 50) ? (2000 + tahunini) : (1900 + tahunini));
if (((tahunini % 4 == 0)
&& !(tahunini % 100 == 0))
||(tahunini % 400 == 0)) monthdays[1]++;
awalwaktu=tanggalsekarang;
while (awalwaktu > 7) awalwaktu-=7;
awalwaktu = hariini - awalwaktu + 1;
if (awalwaktu < 0) awalwaktu+=7;
document.write("<table border=2 bgcolor=white ");
document.write("bordercolor=black><font color=black>");
document.write("<tr><td colspan=7><center><strong>"
+ namabulan[bulanini] + " " + tahunini
+ "</strong></center></font></td></tr>");
document.write("<tr>");
document.write("<td align=center><font>Mi</td>");
document.write("<td align=center>S</td>");
document.write("<td align=center>Se</td>");
document.write("<td align=center>Ra</td>");
document.write("<td align=center>Ka</td>");
document.write("<td align=center>Ju</td>");
document.write("<td align=center>Sa</td>");
document.write("</tr>");
document.write("<tr>");
for (s=0;s<awalwaktu;s++) {
document.write("<td> </td>");
}
jumlah=1;
while (jumlah <= monthdays[bulanini]) {
for (b = awalwaktu;b<7;b++) {
linkbenar=false;
document.write("<td>");
for (c=0;c<linkdays.length;c++) {
if (linkdays[c] != null) {
if ((linkdays[c][0]==bulanini + 1) && (linkdays[c][1]==jumlah)) {
document.write("<a href=\"" + linkdays[c][2] + "\">");
linkbenar=true;
}
}
}
if (jumlah==tanggalsekarang) {
document.write("<font color='FF0000'><strong>");
}
if (jumlah <= monthdays[bulanini]) {
document.write(jumlah);
}
else {
document.write(" ");
}
if (jumlah==tanggalsekarang) {
document.write("</strong></font>");
}
if (linkbenar)
document.write("</a>");
document.write("</td>");
jumlah++;
}
document.write("</tr>");
document.write("<tr>");
awalwaktu=0;
}
document.write("</table></p>");
// End -->