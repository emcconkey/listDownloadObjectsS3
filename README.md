<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:dt="uuid:C2F41010-65B3-11d1-A29F-00AA00C14882"
xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"
xmlns="http://www.w3.org/TR/REC-html40">

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 15">
<meta name=Originator content="Microsoft Word 15">
<link rel=File-List
href="List%20objects%20and%20download%20from%20AWS%20S3_archivos/filelist.xml">
<link rel=Edit-Time-Data
href="List%20objects%20and%20download%20from%20AWS%20S3_archivos/editdata.mso">
<!--[if !mso]>
<style>
v\:* {behavior:url(#default#VML);}
o\:* {behavior:url(#default#VML);}
w\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<![endif]-->
<title>Descarga archivos de Bucket S3 con PHP</title>
<!--[if gte mso 9]><xml>
 <o:DocumentProperties>
  <o:Subject>AWS SDK for PHP</o:Subject>
  <o:Author>Nestor Ismael Aguilar Estrada</o:Author>
  <o:Template>Informe (tema Urbano).dotx</o:Template>
  <o:LastAuthor>naguilar</o:LastAuthor>
  <o:Revision>3</o:Revision>
  <o:TotalTime>87</o:TotalTime>
  <o:LastPrinted>2017-05-19T17:26:00Z</o:LastPrinted>
  <o:Created>2017-05-19T17:36:00Z</o:Created>
  <o:LastSaved>2017-05-19T17:39:00Z</o:LastSaved>
  <o:Pages>1</o:Pages>
  <o:Words>585</o:Words>
  <o:Characters>3220</o:Characters>
  <o:Lines>26</o:Lines>
  <o:Paragraphs>7</o:Paragraphs>
  <o:CharactersWithSpaces>3798</o:CharactersWithSpaces>
  <o:Version>15.00</o:Version>
 </o:DocumentProperties>
 <o:CustomDocumentProperties>
  <o:_TemplateID dt:dt="string">TC017730899991</o:_TemplateID>
 </o:CustomDocumentProperties>
 <o:OfficeDocumentSettings>
  <o:RelyOnVML/>
  <o:AllowPNG/>
  <o:RemoveDateAndTime/>
 </o:OfficeDocumentSettings>
</xml><![endif]-->
<link rel=dataStoreItem
href="List%20objects%20and%20download%20from%20AWS%20S3_archivos/item0018.xml"
target="List%20objects%20and%20download%20from%20AWS%20S3_archivos/props019.xml">
<link rel=dataStoreItem
href="List%20objects%20and%20download%20from%20AWS%20S3_archivos/item0020.xml"
target="List%20objects%20and%20download%20from%20AWS%20S3_archivos/props021.xml">
<link rel=dataStoreItem
href="List%20objects%20and%20download%20from%20AWS%20S3_archivos/item0022.xml"
target="List%20objects%20and%20download%20from%20AWS%20S3_archivos/props023.xml">
<link rel=themeData
href="List%20objects%20and%20download%20from%20AWS%20S3_archivos/themedata.thmx">
<link rel=colorSchemeMapping
href="List%20objects%20and%20download%20from%20AWS%20S3_archivos/colorschememapping.xml">
<!--[if gte mso 9]><xml>
 <w:WordDocument>
  <w:Zoom>156</w:Zoom>
  <w:AttachedTemplate
   HRef="C:\Users\naguilar\AppData\Roaming\Microsoft\Plantillas\Informe (tema Urbano).dotx"></w:AttachedTemplate>
  <w:TrackMoves>false</w:TrackMoves>
  <w:TrackFormatting/>
  <w:HyphenationZone>21</w:HyphenationZone>
  <w:PunctuationKerning/>
  <w:DrawingGridHorizontalSpacing>5 pto</w:DrawingGridHorizontalSpacing>
  <w:DisplayHorizontalDrawingGridEvery>2</w:DisplayHorizontalDrawingGridEvery>
  <w:ValidateAgainstSchemas/>
  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>
  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>
  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>
  <w:DoNotPromoteQF/>
  <w:LidThemeOther>ES</w:LidThemeOther>
  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>
  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>
  <w:Compatibility>
   <w:BreakWrappedTables/>
   <w:SnapToGridInCell/>
   <w:WrapTextWithPunct/>
   <w:UseAsianBreakRules/>
   <w:DontGrowAutofit/>
   <w:SplitPgBreakAndParaMark/>
   <w:EnableOpenTypeKerning/>
   <w:DontFlipMirrorIndents/>
   <w:OverrideTableStyleHps/>
  </w:Compatibility>
  <m:mathPr>
   <m:mathFont m:val="Cambria Math"/>
   <m:brkBin m:val="before"/>
   <m:brkBinSub m:val="&#45;-"/>
   <m:smallFrac m:val="off"/>
   <m:dispDef/>
   <m:lMargin m:val="1440"/>
   <m:rMargin m:val="1440"/>
   <m:defJc m:val="centerGroup"/>
   <m:wrapIndent m:val="1440"/>
   <m:intLim m:val="subSup"/>
   <m:naryLim m:val="undOvr"/>
  </m:mathPr></w:WordDocument>
</xml><![endif]--><!--[if gte mso 9]><xml>
 <w:LatentStyles DefLockedState="false" DefUnhideWhenUsed="false"
  DefSemiHidden="false" DefQFormat="false" DefPriority="99"
  LatentStyleCount="371">
  <w:LsdException Locked="false" Priority="0" QFormat="true" Name="Normal"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 1"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 2"/>
  <w:LsdException Locked="false" Priority="9" QFormat="true" Name="heading 3"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 4"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 5"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 6"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 7"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 8"/>
  <w:LsdException Locked="false" Priority="9" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="heading 9"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index 9"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="toc 1"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="toc 2"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" Name="toc 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="toc 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="toc 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="toc 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="toc 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="toc 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="toc 9"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footnote text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="header"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footer"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="index heading"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="caption"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="table of figures"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="envelope address"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="envelope return"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="footnote reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="line number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="page number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="endnote reference"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="endnote text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="table of authorities"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="macro"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="toa heading"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Bullet 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Number 5"/>
  <w:LsdException Locked="false" Priority="10" QFormat="true" Name="Title"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Closing"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Signature"/>
  <w:LsdException Locked="false" Priority="1" SemiHidden="true"
   UnhideWhenUsed="true" Name="Default Paragraph Font"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="List Continue 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Message Header"/>
  <w:LsdException Locked="false" Priority="11" QFormat="true" Name="Subtitle"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Salutation"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Date"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text First Indent"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text First Indent 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Note Heading"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Body Text Indent 3"/>
  <w:LsdException Locked="false" Priority="3" Name="Block Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Hyperlink"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="FollowedHyperlink"/>
  <w:LsdException Locked="false" Priority="22" QFormat="true" Name="Strong"/>
  <w:LsdException Locked="false" Priority="20" QFormat="true" Name="Emphasis"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Document Map"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Plain Text"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="E-mail Signature"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Top of Form"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Bottom of Form"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal (Web)"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Acronym"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Address"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Cite"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Code"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Definition"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Keyboard"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Preformatted"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Sample"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Typewriter"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="HTML Variable"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Normal Table"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="annotation subject"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="No List"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Outline List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Simple 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Classic 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Colorful 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Columns 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Grid 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 4"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 5"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 6"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 7"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table List 8"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table 3D effects 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Contemporary"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Elegant"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Professional"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Subtle 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Subtle 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 1"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 2"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Web 3"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Balloon Text"/>
  <w:LsdException Locked="false" Priority="1" Name="Table Grid"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Table Theme"/>
  <w:LsdException Locked="false" SemiHidden="true" UnhideWhenUsed="true"
   Name="Placeholder Text"/>
  <w:LsdException Locked="false" Priority="1" QFormat="true" Name="No Spacing"/>
  <w:LsdException Locked="false" Priority="0" SemiHidden="true" Name="Revision"/>
  <w:LsdException Locked="false" Priority="36" QFormat="true"
   Name="List Paragraph"/>
  <w:LsdException Locked="false" Priority="29" QFormat="true" Name="Quote"/>
  <w:LsdException Locked="false" Priority="30" QFormat="true"
   Name="Intense Quote"/>
  <w:LsdException Locked="false" Priority="41" Name="Medium List 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="41" Name="Medium Grid 1 Accent 1"/>
  <w:LsdException Locked="false" Priority="41" Name="Medium Grid 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="41" Name="Medium Grid 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="41" Name="Dark List Accent 1"/>
  <w:LsdException Locked="false" Priority="41" Name="Colorful Shading Accent 1"/>
  <w:LsdException Locked="false" Priority="41" Name="Colorful List Accent 1"/>
  <w:LsdException Locked="false" Priority="41" Name="Colorful Grid Accent 1"/>
  <w:LsdException Locked="false" Priority="42" Name="Light Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="42" Name="Light List Accent 2"/>
  <w:LsdException Locked="false" Priority="42" Name="Light Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="42" Name="Medium Shading 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="42" Name="Medium Shading 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="42" Name="Medium List 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="42" Name="Medium List 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="42" Name="Medium Grid 1 Accent 2"/>
  <w:LsdException Locked="false" Priority="42" Name="Medium Grid 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="42" Name="Medium Grid 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="42" Name="Dark List Accent 2"/>
  <w:LsdException Locked="false" Priority="42" Name="Colorful Shading Accent 2"/>
  <w:LsdException Locked="false" Priority="42" Name="Colorful List Accent 2"/>
  <w:LsdException Locked="false" Priority="42" Name="Colorful Grid Accent 2"/>
  <w:LsdException Locked="false" Priority="43" Name="Light Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="43" Name="Light List Accent 3"/>
  <w:LsdException Locked="false" Priority="43" Name="Light Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="43" Name="Medium Shading 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="43" Name="Medium Shading 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="43" Name="Medium List 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="43" Name="Medium List 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="43" Name="Medium Grid 1 Accent 3"/>
  <w:LsdException Locked="false" Priority="43" Name="Medium Grid 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="43" Name="Medium Grid 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="43" Name="Dark List Accent 3"/>
  <w:LsdException Locked="false" Priority="43" Name="Colorful Shading Accent 3"/>
  <w:LsdException Locked="false" Priority="43" Name="Colorful List Accent 3"/>
  <w:LsdException Locked="false" Priority="43" Name="Colorful Grid Accent 3"/>
  <w:LsdException Locked="false" Priority="44" Name="Light Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="44" Name="Light List Accent 4"/>
  <w:LsdException Locked="false" Priority="44" Name="Light Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="44" Name="Medium Shading 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="44" Name="Medium Shading 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="44" Name="Medium List 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="44" Name="Medium List 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="44" Name="Medium Grid 1 Accent 4"/>
  <w:LsdException Locked="false" Priority="44" Name="Medium Grid 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="44" Name="Medium Grid 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="44" Name="Dark List Accent 4"/>
  <w:LsdException Locked="false" Priority="44" Name="Colorful Shading Accent 4"/>
  <w:LsdException Locked="false" Priority="44" Name="Colorful List Accent 4"/>
  <w:LsdException Locked="false" Priority="44" Name="Colorful Grid Accent 4"/>
  <w:LsdException Locked="false" Priority="45" Name="Light Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="45" Name="Light List Accent 5"/>
  <w:LsdException Locked="false" Priority="45" Name="Light Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="45" Name="Medium Shading 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="45" Name="Medium Shading 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="45" Name="Medium List 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="45" Name="Medium List 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="45" Name="Medium Grid 1 Accent 5"/>
  <w:LsdException Locked="false" Priority="45" Name="Medium Grid 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="45" Name="Medium Grid 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="45" Name="Dark List Accent 5"/>
  <w:LsdException Locked="false" Priority="45" Name="Colorful Shading Accent 5"/>
  <w:LsdException Locked="false" Priority="45" Name="Colorful List Accent 5"/>
  <w:LsdException Locked="false" Priority="45" Name="Colorful Grid Accent 5"/>
  <w:LsdException Locked="false" Priority="46" Name="Light Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="46" Name="Light List Accent 6"/>
  <w:LsdException Locked="false" Priority="46" Name="Light Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="46" Name="Medium Shading 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="46" Name="Medium Shading 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="46" Name="Medium List 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="46" Name="Medium List 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="46" Name="Medium Grid 1 Accent 6"/>
  <w:LsdException Locked="false" Priority="46" Name="Medium Grid 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="46" Name="Medium Grid 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="46" Name="Dark List Accent 6"/>
  <w:LsdException Locked="false" Priority="46" Name="Colorful Shading Accent 6"/>
  <w:LsdException Locked="false" Priority="46" Name="Colorful List Accent 6"/>
  <w:LsdException Locked="false" Priority="46" Name="Colorful Grid Accent 6"/>
  <w:LsdException Locked="false" Priority="19" QFormat="true"
   Name="Subtle Emphasis"/>
  <w:LsdException Locked="false" Priority="21" QFormat="true"
   Name="Intense Emphasis"/>
  <w:LsdException Locked="false" Priority="31" QFormat="true"
   Name="Subtle Reference"/>
  <w:LsdException Locked="false" Priority="32" QFormat="true"
   Name="Intense Reference"/>
  <w:LsdException Locked="false" Priority="33" QFormat="true" Name="Book Title"/>
  <w:LsdException Locked="false" Priority="37" SemiHidden="true"
   UnhideWhenUsed="true" Name="Bibliography"/>
  <w:LsdException Locked="false" Priority="39" SemiHidden="true"
   UnhideWhenUsed="true" QFormat="true" Name="TOC Heading"/>
  <w:LsdException Locked="false" Priority="41" Name="Plain Table 1"/>
  <w:LsdException Locked="false" Priority="42" Name="Plain Table 2"/>
  <w:LsdException Locked="false" Priority="43" Name="Plain Table 3"/>
  <w:LsdException Locked="false" Priority="44" Name="Plain Table 4"/>
  <w:LsdException Locked="false" Priority="45" Name="Plain Table 5"/>
  <w:LsdException Locked="false" Priority="40" Name="Grid Table Light"/>
  <w:LsdException Locked="false" Priority="46" Name="Grid Table 1 Light"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark"/>
  <w:LsdException Locked="false" Priority="51" Name="Grid Table 6 Colorful"/>
  <w:LsdException Locked="false" Priority="52" Name="Grid Table 7 Colorful"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 1"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 1"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 1"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 2"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 2"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 2"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 3"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 3"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 3"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 4"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 4"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 4"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 5"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 5"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 5"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="46"
   Name="Grid Table 1 Light Accent 6"/>
  <w:LsdException Locked="false" Priority="47" Name="Grid Table 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="48" Name="Grid Table 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="49" Name="Grid Table 4 Accent 6"/>
  <w:LsdException Locked="false" Priority="50" Name="Grid Table 5 Dark Accent 6"/>
  <w:LsdException Locked="false" Priority="51"
   Name="Grid Table 6 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="52"
   Name="Grid Table 7 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="46" Name="List Table 1 Light"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark"/>
  <w:LsdException Locked="false" Priority="51" Name="List Table 6 Colorful"/>
  <w:LsdException Locked="false" Priority="52" Name="List Table 7 Colorful"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 1"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 1"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 1"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 1"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 1"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 1"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 2"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 2"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 2"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 2"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 2"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 2"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 3"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 3"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 3"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 3"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 3"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 3"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 4"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 4"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 4"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 4"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 4"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 4"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 5"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 5"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 5"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 5"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 5"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 5"/>
  <w:LsdException Locked="false" Priority="46"
   Name="List Table 1 Light Accent 6"/>
  <w:LsdException Locked="false" Priority="47" Name="List Table 2 Accent 6"/>
  <w:LsdException Locked="false" Priority="48" Name="List Table 3 Accent 6"/>
  <w:LsdException Locked="false" Priority="49" Name="List Table 4 Accent 6"/>
  <w:LsdException Locked="false" Priority="50" Name="List Table 5 Dark Accent 6"/>
  <w:LsdException Locked="false" Priority="51"
   Name="List Table 6 Colorful Accent 6"/>
  <w:LsdException Locked="false" Priority="52"
   Name="List Table 7 Colorful Accent 6"/>
 </w:LatentStyles>
</xml><![endif]-->
<link rel=plchdr
href="List%20objects%20and%20download%20from%20AWS%20S3_archivos/plchdr.htm">
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:Wingdings;
	panose-1:5 0 0 0 0 0 0 0 0 0;
	mso-font-charset:2;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:0 268435456 0 0 -2147483648 0;}
@font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:1;
	mso-generic-font-family:roman;
	mso-font-format:other;
	mso-font-pitch:variable;
	mso-font-signature:0 0 0 0 0 0;}
@font-face
	{font-family:Georgia;
	panose-1:2 4 5 2 5 4 5 2 3 3;
	mso-font-charset:0;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:647 0 0 0 159 0;}
@font-face
	{font-family:Cambria;
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:-536870145 1073743103 0 0 415 0;}
@font-face
	{font-family:Tahoma;
	panose-1:2 11 6 4 3 5 4 4 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-520081665 -1073717157 41 0 66047 0;}
@font-face
	{font-family:"Wingdings 2";
	panose-1:5 2 1 2 1 5 7 7 7 7;
	mso-font-charset:2;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:0 268435456 0 0 -2147483648 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:0cm;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
h1
	{mso-style-priority:9;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-link:"Título 1 Car";
	mso-style-next:Normal;
	margin-top:18.0pt;
	margin-right:0cm;
	margin-bottom:4.0pt;
	margin-left:0cm;
	line-height:115%;
	mso-pagination:widow-orphan;
	mso-outline-level:1;
	border:none;
	mso-border-bottom-alt:solid #438086 .5pt;
	mso-border-bottom-themecolor:accent2;
	padding:0cm;
	mso-padding-alt:0cm 0cm 1.0pt 0cm;
	font-size:16.0pt;
	font-family:"Trebuchet MS","sans-serif";
	mso-ascii-font-family:"Trebuchet MS";
	mso-ascii-theme-font:major-latin;
	mso-hansi-font-family:"Trebuchet MS";
	mso-hansi-theme-font:major-latin;
	color:#438086;
	mso-themecolor:accent2;
	mso-font-kerning:0pt;
	font-weight:normal;}
h2
	{mso-style-priority:9;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-link:"Título 2 Car";
	mso-style-next:Normal;
	margin:0cm;
	margin-bottom:.0001pt;
	line-height:115%;
	mso-pagination:widow-orphan;
	mso-outline-level:2;
	font-size:14.0pt;
	font-family:"Trebuchet MS","sans-serif";
	mso-ascii-font-family:"Trebuchet MS";
	mso-ascii-theme-font:major-latin;
	mso-hansi-font-family:"Trebuchet MS";
	mso-hansi-theme-font:major-latin;
	color:#438086;
	mso-themecolor:accent2;
	font-weight:normal;}
h3
	{mso-style-priority:9;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-link:"Título 3 Car";
	mso-style-next:Normal;
	margin:0cm;
	margin-bottom:.0001pt;
	line-height:115%;
	mso-pagination:widow-orphan;
	mso-outline-level:3;
	font-size:12.0pt;
	font-family:"Trebuchet MS","sans-serif";
	mso-ascii-font-family:"Trebuchet MS";
	mso-ascii-theme-font:major-latin;
	mso-hansi-font-family:"Trebuchet MS";
	mso-hansi-theme-font:major-latin;
	color:#438086;
	mso-themecolor:accent2;
	font-weight:normal;}
h4
	{mso-style-noshow:yes;
	mso-style-priority:9;
	mso-style-qformat:yes;
	mso-style-link:"Título 4 Car";
	mso-style-next:Normal;
	margin:0cm;
	margin-bottom:.0001pt;
	line-height:115%;
	mso-pagination:widow-orphan;
	mso-outline-level:4;
	font-size:11.0pt;
	font-family:"Trebuchet MS","sans-serif";
	mso-ascii-font-family:"Trebuchet MS";
	mso-ascii-theme-font:major-latin;
	mso-hansi-font-family:"Trebuchet MS";
	mso-hansi-theme-font:major-latin;
	color:#438086;
	mso-themecolor:accent2;
	font-weight:normal;
	font-style:italic;
	mso-bidi-font-style:normal;}
h5
	{mso-style-noshow:yes;
	mso-style-priority:9;
	mso-style-qformat:yes;
	mso-style-link:"Título 5 Car";
	mso-style-next:Normal;
	margin:0cm;
	margin-bottom:.0001pt;
	line-height:115%;
	mso-pagination:widow-orphan;
	mso-outline-level:5;
	font-size:10.0pt;
	font-family:"Trebuchet MS","sans-serif";
	mso-ascii-font-family:"Trebuchet MS";
	mso-ascii-theme-font:major-latin;
	mso-hansi-font-family:"Trebuchet MS";
	mso-hansi-theme-font:major-latin;
	color:#325F64;
	mso-themecolor:accent2;
	mso-themeshade:191;
	mso-bidi-font-weight:normal;}
h6
	{mso-style-noshow:yes;
	mso-style-priority:9;
	mso-style-qformat:yes;
	mso-style-link:"Título 6 Car";
	mso-style-next:Normal;
	margin:0cm;
	margin-bottom:.0001pt;
	line-height:115%;
	mso-pagination:widow-orphan;
	mso-outline-level:6;
	font-size:10.0pt;
	font-family:"Trebuchet MS","sans-serif";
	mso-ascii-font-family:"Trebuchet MS";
	mso-ascii-theme-font:major-latin;
	mso-hansi-font-family:"Trebuchet MS";
	mso-hansi-theme-font:major-latin;
	color:#325F64;
	mso-themecolor:accent2;
	mso-themeshade:191;
	mso-bidi-font-weight:normal;
	font-style:italic;
	mso-bidi-font-style:normal;}
p.MsoHeading7, li.MsoHeading7, div.MsoHeading7
	{mso-style-noshow:yes;
	mso-style-priority:9;
	mso-style-qformat:yes;
	mso-style-link:"Título 7 Car";
	mso-style-next:Normal;
	margin:0cm;
	margin-bottom:.0001pt;
	line-height:115%;
	mso-pagination:widow-orphan;
	mso-outline-level:7;
	font-size:10.0pt;
	font-family:"Trebuchet MS","sans-serif";
	mso-ascii-font-family:"Trebuchet MS";
	mso-ascii-theme-font:major-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:"Trebuchet MS";
	mso-hansi-theme-font:major-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	color:#53548A;
	mso-themecolor:accent1;
	font-weight:bold;
	mso-bidi-font-weight:normal;}
p.MsoHeading8, li.MsoHeading8, div.MsoHeading8
	{mso-style-noshow:yes;
	mso-style-priority:9;
	mso-style-qformat:yes;
	mso-style-link:"Título 8 Car";
	mso-style-next:Normal;
	margin:0cm;
	margin-bottom:.0001pt;
	line-height:115%;
	mso-pagination:widow-orphan;
	mso-outline-level:8;
	font-size:10.0pt;
	font-family:"Trebuchet MS","sans-serif";
	mso-ascii-font-family:"Trebuchet MS";
	mso-ascii-theme-font:major-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:"Trebuchet MS";
	mso-hansi-theme-font:major-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	color:#53548A;
	mso-themecolor:accent1;
	font-weight:bold;
	mso-bidi-font-weight:normal;
	font-style:italic;
	mso-bidi-font-style:normal;}
p.MsoHeading9, li.MsoHeading9, div.MsoHeading9
	{mso-style-noshow:yes;
	mso-style-priority:9;
	mso-style-qformat:yes;
	mso-style-link:"Título 9 Car";
	mso-style-next:Normal;
	margin:0cm;
	margin-bottom:.0001pt;
	line-height:115%;
	mso-pagination:widow-orphan;
	mso-outline-level:9;
	font-size:10.0pt;
	font-family:"Trebuchet MS","sans-serif";
	mso-ascii-font-family:"Trebuchet MS";
	mso-ascii-theme-font:major-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:"Trebuchet MS";
	mso-hansi-theme-font:major-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	color:#313240;
	mso-themecolor:text2;
	mso-themeshade:191;
	font-weight:bold;
	mso-bidi-font-weight:normal;}
p.MsoToc1, li.MsoToc1, div.MsoToc1
	{mso-style-update:auto;
	mso-style-priority:39;
	mso-style-qformat:yes;
	mso-style-next:Normal;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:0cm;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p.MsoToc2, li.MsoToc2, div.MsoToc2
	{mso-style-update:auto;
	mso-style-priority:39;
	mso-style-qformat:yes;
	mso-style-next:Normal;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:12.0pt;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p.MsoToc3, li.MsoToc3, div.MsoToc3
	{mso-style-update:auto;
	mso-style-priority:39;
	mso-style-next:Normal;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:5.0pt;
	margin-left:20.0pt;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p.MsoNormalIndent, li.MsoNormalIndent, div.MsoNormalIndent
	{mso-style-priority:99;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:36.0pt;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p.MsoNormalIndentCxSpFirst, li.MsoNormalIndentCxSpFirst, div.MsoNormalIndentCxSpFirst
	{mso-style-priority:99;
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p.MsoNormalIndentCxSpMiddle, li.MsoNormalIndentCxSpMiddle, div.MsoNormalIndentCxSpMiddle
	{mso-style-priority:99;
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p.MsoNormalIndentCxSpLast, li.MsoNormalIndentCxSpLast, div.MsoNormalIndentCxSpLast
	{mso-style-priority:99;
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:36.0pt;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p.MsoHeader, li.MsoHeader, div.MsoHeader
	{mso-style-priority:99;
	mso-style-link:"Encabezado Car";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:0cm;
	line-height:115%;
	mso-pagination:widow-orphan;
	tab-stops:center 216.0pt right 432.0pt;
	font-size:10.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p.MsoFooter, li.MsoFooter, div.MsoFooter
	{mso-style-priority:99;
	mso-style-link:"Pie de página Car";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:0cm;
	line-height:115%;
	mso-pagination:widow-orphan;
	tab-stops:center 216.0pt right 432.0pt;
	font-size:10.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p.MsoCaption, li.MsoCaption, div.MsoCaption
	{mso-style-priority:99;
	mso-style-next:Normal;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:0cm;
	mso-pagination:widow-orphan;
	font-size:9.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	color:#53548A;
	mso-themecolor:accent1;
	font-weight:bold;}
p.MsoTitle, li.MsoTitle, div.MsoTitle
	{mso-style-priority:10;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-link:"Puesto Car";
	margin-top:20.0pt;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:0cm;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:28.0pt;
	font-family:"Trebuchet MS","sans-serif";
	mso-ascii-font-family:"Trebuchet MS";
	mso-ascii-theme-font:major-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:"Trebuchet MS";
	mso-hansi-theme-font:major-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	color:#3E3E67;
	mso-themecolor:accent1;
	mso-themeshade:191;}
p.MsoSubtitle, li.MsoSubtitle, div.MsoSubtitle
	{mso-style-priority:11;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-link:"Subtítulo Car";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:24.0pt;
	margin-left:0cm;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	color:#424456;
	mso-themecolor:text2;
	font-style:italic;
	mso-bidi-font-style:normal;}
p.MsoBlockText, li.MsoBlockText, div.MsoBlockText
	{mso-style-noshow:yes;
	mso-style-priority:3;
	margin-top:0cm;
	margin-right:57.6pt;
	margin-bottom:10.0pt;
	margin-left:57.6pt;
	line-height:115%;
	mso-pagination:widow-orphan;
	border:none;
	mso-border-alt:solid #53548A .25pt;
	mso-border-themecolor:accent1;
	padding:0cm;
	mso-padding-alt:10.0pt 10.0pt 10.0pt 10.0pt;
	font-size:10.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:"Times New Roman";
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	color:#53548A;
	mso-themecolor:accent1;
	font-style:italic;}
a:link, span.MsoHyperlink
	{mso-style-priority:99;
	color:#67AFBD;
	mso-themecolor:hyperlink;
	text-decoration:underline;
	text-underline:single;}
a:visited, span.MsoHyperlinkFollowed
	{mso-style-noshow:yes;
	mso-style-priority:99;
	color:#C2A874;
	mso-themecolor:followedhyperlink;
	text-decoration:underline;
	text-underline:single;}
em
	{mso-style-priority:20;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	color:#438086;
	mso-themecolor:accent2;
	letter-spacing:.5pt;
	font-weight:bold;
	mso-bidi-font-weight:normal;
	font-style:normal;}
pre
	{mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-link:"HTML con formato previo Car";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Courier New";
	mso-fareast-font-family:"Times New Roman";}
p.MsoAcetate, li.MsoAcetate, div.MsoAcetate
	{mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-link:"Texto de globo Car";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:8.0pt;
	font-family:"Tahoma","sans-serif";
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;}
span.MsoPlaceholderText
	{mso-style-priority:99;
	color:gray;}
p.MsoNoSpacing, li.MsoNoSpacing, div.MsoNoSpacing
	{mso-style-priority:1;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	mso-bidi-font-size:16.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
	{mso-style-priority:36;
	mso-style-qformat:yes;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:36.0pt;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p.MsoListParagraphCxSpFirst, li.MsoListParagraphCxSpFirst, div.MsoListParagraphCxSpFirst
	{mso-style-priority:36;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p.MsoListParagraphCxSpMiddle, li.MsoListParagraphCxSpMiddle, div.MsoListParagraphCxSpMiddle
	{mso-style-priority:36;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:36.0pt;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p.MsoListParagraphCxSpLast, li.MsoListParagraphCxSpLast, div.MsoListParagraphCxSpLast
	{mso-style-priority:36;
	mso-style-qformat:yes;
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:36.0pt;
	mso-add-space:auto;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p.MsoIntenseQuote, li.MsoIntenseQuote, div.MsoIntenseQuote
	{mso-style-priority:30;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin-top:18.0pt;
	margin-right:54.0pt;
	margin-bottom:18.0pt;
	margin-left:54.0pt;
	line-height:135%;
	mso-pagination:widow-orphan;
	border:none;
	mso-border-top-alt:three-d-engrave #438086 2.25pt;
	mso-border-top-themecolor:accent2;
	mso-border-bottom-alt:solid #438086 .5pt;
	mso-border-bottom-themecolor:accent2;
	padding:0cm;
	mso-padding-alt:10.0pt 0cm 10.0pt 0cm;
	font-size:11.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	color:#438086;
	mso-themecolor:accent2;
	font-style:italic;
	mso-bidi-font-style:normal;}
span.MsoSubtleEmphasis
	{mso-style-priority:19;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	color:#006666;
	font-style:italic;
	mso-bidi-font-style:normal;}
span.MsoIntenseEmphasis
	{mso-style-priority:21;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	color:#438086;
	text-transform:uppercase;
	letter-spacing:.25pt;
	font-weight:bold;
	mso-bidi-font-weight:normal;
	font-style:italic;
	mso-bidi-font-style:normal;}
span.MsoSubtleReference
	{mso-style-priority:31;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	font-family:"Times New Roman","serif";
	mso-bidi-font-family:"Times New Roman";
	color:#4E4F89;
	font-style:italic;
	mso-bidi-font-style:normal;}
span.MsoIntenseReference
	{mso-style-priority:32;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	color:#4E4F89;
	text-transform:uppercase;
	letter-spacing:.25pt;
	font-weight:bold;
	mso-bidi-font-weight:normal;
	font-style:italic;
	mso-bidi-font-style:normal;}
span.MsoBookTitle
	{mso-style-priority:33;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Cambria","serif";
	mso-ascii-font-family:Cambria;
	mso-hansi-font-family:Cambria;
	mso-bidi-font-family:"Times New Roman";
	color:black;
	font-style:italic;
	mso-bidi-font-style:normal;}
span.PuestoCar
	{mso-style-name:"Puesto Car";
	mso-style-priority:10;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:Puesto;
	mso-ansi-font-size:28.0pt;
	mso-bidi-font-size:28.0pt;
	font-family:"Trebuchet MS","sans-serif";
	mso-ascii-font-family:"Trebuchet MS";
	mso-ascii-theme-font:major-latin;
	mso-hansi-font-family:"Trebuchet MS";
	mso-hansi-theme-font:major-latin;
	color:#3E3E67;
	mso-themecolor:accent1;
	mso-themeshade:191;}
span.SubttuloCar
	{mso-style-name:"Subtítulo Car";
	mso-style-priority:11;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:Subtítulo;
	mso-ansi-font-size:12.0pt;
	mso-bidi-font-size:12.0pt;
	color:#424456;
	mso-themecolor:text2;
	font-style:italic;
	mso-bidi-font-style:normal;}
span.Ttulo1Car
	{mso-style-name:"Título 1 Car";
	mso-style-priority:9;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"Título 1";
	mso-ansi-font-size:16.0pt;
	mso-bidi-font-size:16.0pt;
	font-family:"Trebuchet MS","sans-serif";
	mso-ascii-font-family:"Trebuchet MS";
	mso-ascii-theme-font:major-latin;
	mso-hansi-font-family:"Trebuchet MS";
	mso-hansi-theme-font:major-latin;
	color:#438086;
	mso-themecolor:accent2;}
span.Ttulo2Car
	{mso-style-name:"Título 2 Car";
	mso-style-priority:9;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"Título 2";
	mso-ansi-font-size:14.0pt;
	mso-bidi-font-size:14.0pt;
	font-family:"Trebuchet MS","sans-serif";
	mso-ascii-font-family:"Trebuchet MS";
	mso-ascii-theme-font:major-latin;
	mso-hansi-font-family:"Trebuchet MS";
	mso-hansi-theme-font:major-latin;
	color:#438086;
	mso-themecolor:accent2;}
span.Ttulo3Car
	{mso-style-name:"Título 3 Car";
	mso-style-priority:9;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"Título 3";
	mso-ansi-font-size:12.0pt;
	mso-bidi-font-size:12.0pt;
	font-family:"Trebuchet MS","sans-serif";
	mso-ascii-font-family:"Trebuchet MS";
	mso-ascii-theme-font:major-latin;
	mso-hansi-font-family:"Trebuchet MS";
	mso-hansi-theme-font:major-latin;
	color:#438086;
	mso-themecolor:accent2;}
span.Ttulo4Car
	{mso-style-name:"Título 4 Car";
	mso-style-noshow:yes;
	mso-style-priority:9;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"Título 4";
	font-family:"Trebuchet MS","sans-serif";
	mso-ascii-font-family:"Trebuchet MS";
	mso-ascii-theme-font:major-latin;
	mso-hansi-font-family:"Trebuchet MS";
	mso-hansi-theme-font:major-latin;
	color:#438086;
	mso-themecolor:accent2;
	font-style:italic;
	mso-bidi-font-style:normal;}
span.Ttulo5Car
	{mso-style-name:"Título 5 Car";
	mso-style-noshow:yes;
	mso-style-priority:9;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"Título 5";
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Trebuchet MS","sans-serif";
	mso-ascii-font-family:"Trebuchet MS";
	mso-ascii-theme-font:major-latin;
	mso-hansi-font-family:"Trebuchet MS";
	mso-hansi-theme-font:major-latin;
	color:#325F64;
	mso-themecolor:accent2;
	mso-themeshade:191;
	font-weight:bold;
	mso-bidi-font-weight:normal;}
span.Ttulo6Car
	{mso-style-name:"Título 6 Car";
	mso-style-noshow:yes;
	mso-style-priority:9;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"Título 6";
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Trebuchet MS","sans-serif";
	mso-ascii-font-family:"Trebuchet MS";
	mso-ascii-theme-font:major-latin;
	mso-hansi-font-family:"Trebuchet MS";
	mso-hansi-theme-font:major-latin;
	color:#325F64;
	mso-themecolor:accent2;
	mso-themeshade:191;
	font-weight:bold;
	mso-bidi-font-weight:normal;
	font-style:italic;
	mso-bidi-font-style:normal;}
span.Ttulo7Car
	{mso-style-name:"Título 7 Car";
	mso-style-noshow:yes;
	mso-style-priority:9;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"Título 7";
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Trebuchet MS","sans-serif";
	mso-ascii-font-family:"Trebuchet MS";
	mso-ascii-theme-font:major-latin;
	mso-hansi-font-family:"Trebuchet MS";
	mso-hansi-theme-font:major-latin;
	color:#53548A;
	mso-themecolor:accent1;
	font-weight:bold;
	mso-bidi-font-weight:normal;}
span.Ttulo8Car
	{mso-style-name:"Título 8 Car";
	mso-style-noshow:yes;
	mso-style-priority:9;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"Título 8";
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Trebuchet MS","sans-serif";
	mso-ascii-font-family:"Trebuchet MS";
	mso-ascii-theme-font:major-latin;
	mso-hansi-font-family:"Trebuchet MS";
	mso-hansi-theme-font:major-latin;
	color:#53548A;
	mso-themecolor:accent1;
	font-weight:bold;
	mso-bidi-font-weight:normal;
	font-style:italic;
	mso-bidi-font-style:normal;}
span.Ttulo9Car
	{mso-style-name:"Título 9 Car";
	mso-style-noshow:yes;
	mso-style-priority:9;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"Título 9";
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Trebuchet MS","sans-serif";
	mso-ascii-font-family:"Trebuchet MS";
	mso-ascii-theme-font:major-latin;
	mso-hansi-font-family:"Trebuchet MS";
	mso-hansi-theme-font:major-latin;
	color:#313240;
	mso-themecolor:text2;
	mso-themeshade:191;
	font-weight:bold;
	mso-bidi-font-weight:normal;}
span.EncabezadoCar
	{mso-style-name:"Encabezado Car";
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:Encabezado;
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;}
span.PiedepginaCar
	{mso-style-name:"Pie de página Car";
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"Pie de página";
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;}
span.TextodegloboCar
	{mso-style-name:"Texto de globo Car";
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"Texto de globo";
	mso-ansi-font-size:8.0pt;
	mso-bidi-font-size:8.0pt;
	font-family:"Tahoma","sans-serif";
	mso-ascii-font-family:Tahoma;
	mso-hansi-font-family:Tahoma;
	mso-bidi-font-family:Tahoma;}
p.Vieta1, li.Vieta1, div.Vieta1
	{mso-style-name:"Viñeta 1";
	mso-style-priority:38;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"Párrafo de lista";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:10.8pt;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	text-indent:-10.8pt;
	line-height:115%;
	mso-pagination:widow-orphan;
	mso-list:l25 level1 lfo38;
	font-size:10.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p.Vieta1CxSpFirst, li.Vieta1CxSpFirst, div.Vieta1CxSpFirst
	{mso-style-name:"Viñeta 1CxSpFirst";
	mso-style-priority:38;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"Párrafo de lista";
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:10.8pt;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	text-indent:-10.8pt;
	line-height:115%;
	mso-pagination:widow-orphan;
	mso-list:l25 level1 lfo38;
	font-size:10.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p.Vieta1CxSpMiddle, li.Vieta1CxSpMiddle, div.Vieta1CxSpMiddle
	{mso-style-name:"Viñeta 1CxSpMiddle";
	mso-style-priority:38;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"Párrafo de lista";
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:10.8pt;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	text-indent:-10.8pt;
	line-height:115%;
	mso-pagination:widow-orphan;
	mso-list:l25 level1 lfo38;
	font-size:10.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p.Vieta1CxSpLast, li.Vieta1CxSpLast, div.Vieta1CxSpLast
	{mso-style-name:"Viñeta 1CxSpLast";
	mso-style-priority:38;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"Párrafo de lista";
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:10.8pt;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	text-indent:-10.8pt;
	line-height:115%;
	mso-pagination:widow-orphan;
	mso-list:l25 level1 lfo38;
	font-size:10.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p.Vieta2, li.Vieta2, div.Vieta2
	{mso-style-name:"Viñeta 2";
	mso-style-priority:38;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"Párrafo de lista";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:23.05pt;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	text-indent:-10.8pt;
	line-height:115%;
	mso-pagination:widow-orphan;
	mso-list:l25 level2 lfo38;
	font-size:10.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p.Vieta2CxSpFirst, li.Vieta2CxSpFirst, div.Vieta2CxSpFirst
	{mso-style-name:"Viñeta 2CxSpFirst";
	mso-style-priority:38;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"Párrafo de lista";
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:23.05pt;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	text-indent:-10.8pt;
	line-height:115%;
	mso-pagination:widow-orphan;
	mso-list:l25 level2 lfo38;
	font-size:10.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p.Vieta2CxSpMiddle, li.Vieta2CxSpMiddle, div.Vieta2CxSpMiddle
	{mso-style-name:"Viñeta 2CxSpMiddle";
	mso-style-priority:38;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"Párrafo de lista";
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:23.05pt;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	text-indent:-10.8pt;
	line-height:115%;
	mso-pagination:widow-orphan;
	mso-list:l25 level2 lfo38;
	font-size:10.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p.Vieta2CxSpLast, li.Vieta2CxSpLast, div.Vieta2CxSpLast
	{mso-style-name:"Viñeta 2CxSpLast";
	mso-style-priority:38;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"Párrafo de lista";
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:23.05pt;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	text-indent:-10.8pt;
	line-height:115%;
	mso-pagination:widow-orphan;
	mso-list:l25 level2 lfo38;
	font-size:10.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p.Vieta3, li.Vieta3, div.Vieta3
	{mso-style-name:"Viñeta 3";
	mso-style-priority:38;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"Párrafo de lista";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:35.3pt;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	text-indent:-10.8pt;
	line-height:115%;
	mso-pagination:widow-orphan;
	mso-list:l25 level3 lfo38;
	font-size:10.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p.Vieta3CxSpFirst, li.Vieta3CxSpFirst, div.Vieta3CxSpFirst
	{mso-style-name:"Viñeta 3CxSpFirst";
	mso-style-priority:38;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"Párrafo de lista";
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:35.3pt;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	text-indent:-10.8pt;
	line-height:115%;
	mso-pagination:widow-orphan;
	mso-list:l25 level3 lfo38;
	font-size:10.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p.Vieta3CxSpMiddle, li.Vieta3CxSpMiddle, div.Vieta3CxSpMiddle
	{mso-style-name:"Viñeta 3CxSpMiddle";
	mso-style-priority:38;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"Párrafo de lista";
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:35.3pt;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	text-indent:-10.8pt;
	line-height:115%;
	mso-pagination:widow-orphan;
	mso-list:l25 level3 lfo38;
	font-size:10.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p.Vieta3CxSpLast, li.Vieta3CxSpLast, div.Vieta3CxSpLast
	{mso-style-name:"Viñeta 3CxSpLast";
	mso-style-priority:38;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"Párrafo de lista";
	mso-style-type:export-only;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:35.3pt;
	margin-bottom:.0001pt;
	mso-add-space:auto;
	text-indent:-10.8pt;
	line-height:115%;
	mso-pagination:widow-orphan;
	mso-list:l25 level3 lfo38;
	font-size:10.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p.MarcadorDePosicinPredeterminadoAsunto10, li.MarcadorDePosicinPredeterminadoAsunto10, div.MarcadorDePosicinPredeterminadoAsunto10
	{mso-style-name:MarcadorDePosiciónPredeterminado_Asunto10;
	mso-style-priority:39;
	mso-style-unhide:no;
	mso-style-parent:"";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:0cm;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:12.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	color:#424456;
	mso-themecolor:text2;
	font-style:italic;
	mso-bidi-font-style:normal;}
p.Encabezadopar, li.Encabezadopar, div.Encabezadopar
	{mso-style-name:"Encabezado par";
	mso-style-priority:39;
	mso-style-unhide:no;
	mso-style-parent:Encabezado;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:0cm;
	line-height:115%;
	mso-pagination:widow-orphan;
	tab-stops:center 216.0pt right 432.0pt;
	border:none;
	mso-border-bottom-alt:solid windowtext .5pt;
	padding:0cm;
	mso-padding-alt:0cm 0cm 1.0pt 0cm;
	font-size:10.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p.Encabezadoimpar, li.Encabezadoimpar, div.Encabezadoimpar
	{mso-style-name:"Encabezado impar";
	mso-style-priority:39;
	mso-style-unhide:no;
	mso-style-parent:Encabezado;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:10.0pt;
	margin-left:0cm;
	text-align:right;
	line-height:115%;
	mso-pagination:widow-orphan;
	tab-stops:center 216.0pt right 432.0pt;
	border:none;
	mso-border-bottom-alt:solid windowtext .5pt;
	padding:0cm;
	mso-padding-alt:0cm 0cm 1.0pt 0cm;
	font-size:10.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
p.Categora, li.Categora, div.Categora
	{mso-style-name:Categoría;
	mso-style-priority:39;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	mso-element:frame;
	mso-element-frame-hspace:9.35pt;
	mso-element-wrap:around;
	mso-element-anchor-horizontal:margin;
	mso-element-left:center;
	mso-element-top:36.05pt;
	mso-height-rule:exactly;
	font-size:11.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	text-transform:uppercase;}
p.Comentarios, li.Comentarios, div.Comentarios
	{mso-style-name:Comentarios;
	mso-style-priority:39;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:6.0pt;
	margin-left:0cm;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	mso-bidi-font-size:11.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	font-weight:bold;
	mso-bidi-font-weight:normal;}
p.Textodecomentarios, li.Textodecomentarios, div.Textodecomentarios
	{mso-style-name:"Texto de comentarios";
	mso-style-priority:39;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:6.0pt;
	margin-left:0cm;
	line-height:120%;
	mso-pagination:widow-orphan;
	font-size:10.0pt;
	mso-bidi-font-size:11.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
span.HTMLconformatoprevioCar
	{mso-style-name:"HTML con formato previo Car";
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"HTML con formato previo";
	mso-ansi-font-size:10.0pt;
	mso-bidi-font-size:10.0pt;
	font-family:"Courier New";
	mso-ascii-font-family:"Courier New";
	mso-fareast-font-family:"Times New Roman";
	mso-hansi-font-family:"Courier New";
	mso-bidi-font-family:"Courier New";}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:Georgia;
	mso-fareast-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
.MsoPapDefault
	{mso-style-type:export-only;
	margin-bottom:10.0pt;
	line-height:115%;}
 /* Page Definitions */
 @page
	{mso-footnote-separator:url("List%20objects%20and%20download%20from%20AWS%20S3_archivos/header.htm") fs;
	mso-footnote-continuation-separator:url("List%20objects%20and%20download%20from%20AWS%20S3_archivos/header.htm") fcs;
	mso-endnote-separator:url("List%20objects%20and%20download%20from%20AWS%20S3_archivos/header.htm") es;
	mso-endnote-continuation-separator:url("List%20objects%20and%20download%20from%20AWS%20S3_archivos/header.htm") ecs;
	mso-facing-pages:yes;}
@page WordSection1
	{size:21.0cm 841.95pt;
	margin:72.0pt 70.9pt 72.0pt 70.9pt;
	mso-header-margin:35.45pt;
	mso-footer-margin:35.45pt;
	mso-page-numbers:0;
	mso-title-page:yes;
	mso-even-header:url("List%20objects%20and%20download%20from%20AWS%20S3_archivos/header.htm") eh1;
	mso-header:url("List%20objects%20and%20download%20from%20AWS%20S3_archivos/header.htm") h1;
	mso-even-footer:url("List%20objects%20and%20download%20from%20AWS%20S3_archivos/header.htm") ef1;
	mso-footer:url("List%20objects%20and%20download%20from%20AWS%20S3_archivos/header.htm") f1;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
 /* List Definitions */
 @list l0
	{mso-list-id:-132;
	mso-list-type:simple;
	mso-list-template-ids:-1029252832;}
@list l0:level1
	{mso-level-tab-stop:90.0pt;
	mso-level-number-position:left;
	margin-left:90.0pt;
	text-indent:-18.0pt;}
@list l1
	{mso-list-id:-131;
	mso-list-type:simple;
	mso-list-template-ids:-1438194156;}
@list l1:level1
	{mso-level-tab-stop:72.0pt;
	mso-level-number-position:left;
	margin-left:72.0pt;
	text-indent:-18.0pt;}
@list l2
	{mso-list-id:-130;
	mso-list-type:simple;
	mso-list-template-ids:459166316;}
@list l2:level1
	{mso-level-tab-stop:54.0pt;
	mso-level-number-position:left;
	margin-left:54.0pt;
	text-indent:-18.0pt;}
@list l3
	{mso-list-id:-129;
	mso-list-type:simple;
	mso-list-template-ids:-1146731178;}
@list l4
	{mso-list-id:-128;
	mso-list-type:simple;
	mso-list-template-ids:1441430662;}
@list l4:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:90.0pt;
	mso-level-number-position:left;
	margin-left:90.0pt;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l5
	{mso-list-id:-127;
	mso-list-type:simple;
	mso-list-template-ids:120745392;}
@list l5:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:72.0pt;
	mso-level-number-position:left;
	margin-left:72.0pt;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l6
	{mso-list-id:-126;
	mso-list-type:simple;
	mso-list-template-ids:-314938372;}
@list l6:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:54.0pt;
	mso-level-number-position:left;
	margin-left:54.0pt;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l7
	{mso-list-id:-125;
	mso-list-type:simple;
	mso-list-template-ids:-569491742;}
@list l7:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:36.0pt;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l8
	{mso-list-id:-120;
	mso-list-type:simple;
	mso-list-template-ids:2129980178;}
@list l8:level1
	{mso-level-tab-stop:18.0pt;
	mso-level-number-position:left;
	margin-left:18.0pt;
	text-indent:-18.0pt;}
@list l9
	{mso-list-id:-119;
	mso-list-type:simple;
	mso-list-template-ids:-158829854;}
@list l9:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:18.0pt;
	mso-level-number-position:left;
	margin-left:18.0pt;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l10
	{mso-list-id:6099369;
	mso-list-template-ids:867194576;
	mso-list-style-id:1033651875;}
@list l10:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:10.8pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:9.0pt;
	font-family:Symbol;
	color:#A04DA3;
	mso-themecolor:accent3;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l10:level2
	{mso-level-number-format:bullet;
	mso-level-text:\F0A8;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:23.05pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:6.0pt;
	font-family:Wingdings;
	color:#438086;
	mso-themecolor:accent2;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l10:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:35.3pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l10:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:47.55pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l10:level5
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:59.8pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l10:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:72.05pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l10:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:84.3pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l10:level8
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:96.55pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l10:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:108.8pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l11
	{mso-list-id:36705276;
	mso-list-type:hybrid;
	mso-list-template-ids:-1827735954 -1197988646 1547351584 134873115 134873103 134873113 134873115 134873103 134873113 134873115;}
@list l11:level1
	{mso-level-number-format:alpha-lower;
	mso-level-text:"%1\)";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:18.0pt;
	text-indent:-18.0pt;
	mso-ansi-font-weight:bold;}
@list l11:level2
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:54.0pt;
	text-indent:-18.0pt;
	mso-ansi-font-size:12.0pt;}
@list l11:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:90.0pt;
	text-indent:-9.0pt;}
@list l11:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:126.0pt;
	text-indent:-18.0pt;}
@list l11:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:162.0pt;
	text-indent:-18.0pt;}
@list l11:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:198.0pt;
	text-indent:-9.0pt;}
@list l11:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:234.0pt;
	text-indent:-18.0pt;}
@list l11:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:270.0pt;
	text-indent:-18.0pt;}
@list l11:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:306.0pt;
	text-indent:-9.0pt;}
@list l12
	{mso-list-id:72050086;
	mso-list-type:hybrid;
	mso-list-template-ids:-579582882 134873103 134873113 134873115 134873103 134873113 134873115 134873103 134873113 134873115;}
@list l12:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l12:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l12:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l12:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l12:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l12:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l12:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l12:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l12:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l13
	{mso-list-id:249313508;
	mso-list-template-ids:867194576;
	mso-list-style-id:1033651875;}
@list l13:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:10.8pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:9.0pt;
	font-family:Symbol;
	color:#A04DA3;
	mso-themecolor:accent3;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l13:level2
	{mso-level-number-format:bullet;
	mso-level-text:\F0A8;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:23.05pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:6.0pt;
	font-family:Wingdings;
	color:#438086;
	mso-themecolor:accent2;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l13:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:35.3pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l13:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:47.55pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l13:level5
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:59.8pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l13:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:72.05pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l13:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:84.3pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l13:level8
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:96.55pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l13:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:108.8pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l14
	{mso-list-id:306937073;
	mso-list-template-ids:2059837774;
	mso-list-style-priority:99;
	mso-list-style-name:"Lista numerada urbana";}
@list l14:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:14.4pt;
	text-indent:-14.4pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	color:#A04DA3;
	mso-themecolor:accent3;
	mso-ansi-font-style:normal;}
@list l14:level2
	{mso-level-number-format:alpha-upper;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:39.6pt;
	text-indent:-14.4pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	color:#438086;
	mso-themecolor:accent2;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l14:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:64.8pt;
	text-indent:-14.4pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l14:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:90.0pt;
	text-indent:-14.4pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l14:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:115.2pt;
	text-indent:-14.4pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l14:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:140.4pt;
	text-indent:-14.4pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l14:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:165.6pt;
	text-indent:-14.4pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l14:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:190.8pt;
	text-indent:-14.4pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l14:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:216.0pt;
	text-indent:-14.4pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l15
	{mso-list-id:373581701;
	mso-list-type:hybrid;
	mso-list-template-ids:1497932216 134873111 134873113 134873115 134873103 134873113 134873115 134873103 134873113 134873115;}
@list l15:level1
	{mso-level-number-format:alpha-lower;
	mso-level-text:"%1\)";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l15:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l15:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l15:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l15:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l15:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l15:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l15:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l15:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l16
	{mso-list-id:431897180;
	mso-list-template-ids:867194576;}
@list l16:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:10.8pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:9.0pt;
	font-family:Symbol;
	color:#A04DA3;
	mso-themecolor:accent3;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l16:level2
	{mso-level-number-format:bullet;
	mso-level-text:\F0A8;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:23.05pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:6.0pt;
	font-family:Wingdings;
	color:#438086;
	mso-themecolor:accent2;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l16:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:35.3pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l16:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:47.55pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l16:level5
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:59.8pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l16:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:72.05pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l16:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:84.3pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l16:level8
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:96.55pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l16:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:108.8pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l17
	{mso-list-id:443307287;
	mso-list-template-ids:2059837774;
	mso-list-style-id:306937073;}
@list l17:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:14.4pt;
	text-indent:-14.4pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	color:#A04DA3;
	mso-themecolor:accent3;
	mso-ansi-font-style:normal;}
@list l17:level2
	{mso-level-number-format:alpha-upper;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:39.6pt;
	text-indent:-14.4pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	color:#438086;
	mso-themecolor:accent2;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l17:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:64.8pt;
	text-indent:-14.4pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l17:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:90.0pt;
	text-indent:-14.4pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l17:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:115.2pt;
	text-indent:-14.4pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l17:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:140.4pt;
	text-indent:-14.4pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l17:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:165.6pt;
	text-indent:-14.4pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l17:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:190.8pt;
	text-indent:-14.4pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l17:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:216.0pt;
	text-indent:-14.4pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l18
	{mso-list-id:501117920;
	mso-list-template-ids:867194576;
	mso-list-style-id:1033651875;}
@list l18:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:10.8pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:9.0pt;
	font-family:Symbol;
	color:#A04DA3;
	mso-themecolor:accent3;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l18:level2
	{mso-level-number-format:bullet;
	mso-level-text:\F0A8;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:23.05pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:6.0pt;
	font-family:Wingdings;
	color:#438086;
	mso-themecolor:accent2;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l18:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:35.3pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l18:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:47.55pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l18:level5
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:59.8pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l18:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:72.05pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l18:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:84.3pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l18:level8
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:96.55pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l18:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:108.8pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l19
	{mso-list-id:622464882;
	mso-list-template-ids:2059837774;}
@list l19:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:14.4pt;
	text-indent:-14.4pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	color:#A04DA3;
	mso-themecolor:accent3;
	mso-ansi-font-style:normal;}
@list l19:level2
	{mso-level-number-format:alpha-upper;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:39.6pt;
	text-indent:-14.4pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	color:#438086;
	mso-themecolor:accent2;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l19:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:64.8pt;
	text-indent:-14.4pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l19:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:90.0pt;
	text-indent:-14.4pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l19:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:115.2pt;
	text-indent:-14.4pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l19:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:140.4pt;
	text-indent:-14.4pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l19:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:165.6pt;
	text-indent:-14.4pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l19:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:190.8pt;
	text-indent:-14.4pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l19:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:216.0pt;
	text-indent:-14.4pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l20
	{mso-list-id:746609065;
	mso-list-type:hybrid;
	mso-list-template-ids:121673172 134873089 134873091 134873093 134873089 134873091 134873093 134873089 134873091 134873093;}
@list l20:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l20:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l20:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l20:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l20:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l20:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l20:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;}
@list l20:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l20:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;}
@list l21
	{mso-list-id:786123113;
	mso-list-type:hybrid;
	mso-list-template-ids:1870663850 134873103 134873113 134873115 134873103 134873113 134873115 134873103 134873113 134873115;}
@list l21:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:54.0pt;
	text-indent:-18.0pt;}
@list l21:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:90.0pt;
	text-indent:-18.0pt;}
@list l21:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:126.0pt;
	text-indent:-9.0pt;}
@list l21:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:162.0pt;
	text-indent:-18.0pt;}
@list l21:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:198.0pt;
	text-indent:-18.0pt;}
@list l21:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:234.0pt;
	text-indent:-9.0pt;}
@list l21:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:270.0pt;
	text-indent:-18.0pt;}
@list l21:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:306.0pt;
	text-indent:-18.0pt;}
@list l21:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:342.0pt;
	text-indent:-9.0pt;}
@list l22
	{mso-list-id:814489398;
	mso-list-type:hybrid;
	mso-list-template-ids:988298716 67698703 -2066551422 1430158704 -555449720 67698713 67698715 67698703 67698713 67698715;}
@list l22:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:72.0pt;
	text-indent:-18.0pt;}
@list l22:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:108.0pt;
	text-indent:-18.0pt;
	color:#424456;
	mso-themecolor:text2;}
@list l22:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:144.0pt;
	text-indent:-9.0pt;
	color:#424456;
	mso-themecolor:text2;}
@list l22:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:180.0pt;
	text-indent:-18.0pt;
	color:#424456;
	mso-themecolor:text2;}
@list l22:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:216.0pt;
	text-indent:-18.0pt;}
@list l22:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:252.0pt;
	text-indent:-9.0pt;}
@list l22:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:288.0pt;
	text-indent:-18.0pt;}
@list l22:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:324.0pt;
	text-indent:-18.0pt;}
@list l22:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:360.0pt;
	text-indent:-9.0pt;}
@list l23
	{mso-list-id:904338649;
	mso-list-type:hybrid;
	mso-list-template-ids:970348628 122836048 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l23:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:72.0pt;
	text-indent:-18.0pt;
	font-family:Symbol;
	mso-bidi-font-family:Symbol;
	color:#A04DA3;
	mso-themecolor:accent3;}
@list l23:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:108.0pt;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l23:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:144.0pt;
	text-indent:-18.0pt;
	font-family:Wingdings;
	mso-bidi-font-family:Wingdings;}
@list l23:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:180.0pt;
	text-indent:-18.0pt;
	font-family:Symbol;
	mso-bidi-font-family:Symbol;}
@list l23:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:216.0pt;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l23:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:252.0pt;
	text-indent:-18.0pt;
	font-family:Wingdings;
	mso-bidi-font-family:Wingdings;}
@list l23:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:288.0pt;
	text-indent:-18.0pt;
	font-family:Symbol;
	mso-bidi-font-family:Symbol;}
@list l23:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:324.0pt;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l23:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:360.0pt;
	text-indent:-18.0pt;
	font-family:Wingdings;
	mso-bidi-font-family:Wingdings;}
@list l24
	{mso-list-id:916983330;
	mso-list-type:hybrid;
	mso-list-template-ids:-814327146 67698689 67698691 67698693 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l24:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;
	mso-bidi-font-family:Symbol;}
@list l24:level2
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l24:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;
	mso-bidi-font-family:Wingdings;}
@list l24:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;
	mso-bidi-font-family:Symbol;}
@list l24:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l24:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;
	mso-bidi-font-family:Wingdings;}
@list l24:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;
	mso-bidi-font-family:Symbol;}
@list l24:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l24:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;
	mso-bidi-font-family:Wingdings;}
@list l25
	{mso-list-id:1033651875;
	mso-list-template-ids:867194576;
	mso-list-style-priority:99;
	mso-list-style-name:"Lista con viñetas urbana";}
@list l25:level1
	{mso-level-number-format:bullet;
	mso-level-style-link:"Viñeta 1";
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:10.8pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:9.0pt;
	font-family:Symbol;
	color:#A04DA3;
	mso-themecolor:accent3;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l25:level2
	{mso-level-number-format:bullet;
	mso-level-style-link:"Viñeta 2";
	mso-level-text:\F0A8;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:23.05pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:6.0pt;
	font-family:Wingdings;
	color:#438086;
	mso-themecolor:accent2;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l25:level3
	{mso-level-number-format:bullet;
	mso-level-style-link:"Viñeta 3";
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:35.3pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l25:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:47.55pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l25:level5
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:59.8pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l25:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:72.05pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l25:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:84.3pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l25:level8
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:96.55pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l25:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:108.8pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l26
	{mso-list-id:1085373881;
	mso-list-type:hybrid;
	mso-list-template-ids:-1598149936 -1006348224 160204720 67698715 67698703 67698713 67698715 67698703 67698713 67698715;}
@list l26:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:9.0pt;
	mso-bidi-font-size:9.0pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:"Trebuchet MS";
	mso-ascii-theme-font:major-latin;
	mso-hansi-font-family:"Trebuchet MS";
	mso-hansi-theme-font:major-latin;
	color:#325F64;
	mso-themecolor:accent2;
	mso-themeshade:191;
	text-decoration:none;
	text-underline:none;}
@list l26:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	color:#438086;
	mso-themecolor:accent2;}
@list l26:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l26:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l26:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l26:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l26:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l26:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;}
@list l26:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	text-indent:-9.0pt;}
@list l27
	{mso-list-id:1086684103;
	mso-list-type:hybrid;
	mso-list-template-ids:1348772596 -1110951220 -392787860 331415032 67698689 67698691 67698693 67698689 67698691 67698693;}
@list l27:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:8.0pt;
	mso-bidi-font-size:8.0pt;
	font-family:Wingdings;
	mso-bidi-font-family:Wingdings;
	color:#325F64;
	mso-themecolor:accent2;
	mso-themeshade:191;}
@list l27:level2
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:8.0pt;
	mso-bidi-font-size:8.0pt;
	font-family:Wingdings;
	mso-bidi-font-family:Wingdings;
	color:#438086;
	mso-themecolor:accent2;}
@list l27:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	mso-ansi-font-size:8.0pt;
	mso-bidi-font-size:8.0pt;
	font-family:Wingdings;
	mso-bidi-font-family:Wingdings;
	color:#83BBC1;
	mso-themecolor:accent2;
	mso-themetint:153;}
@list l27:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;
	mso-bidi-font-family:Symbol;}
@list l27:level5
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l27:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;
	mso-bidi-font-family:Wingdings;}
@list l27:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Symbol;
	mso-bidi-font-family:Symbol;}
@list l27:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l27:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	text-indent:-18.0pt;
	font-family:Wingdings;
	mso-bidi-font-family:Wingdings;}
@list l28
	{mso-list-id:1184706073;
	mso-list-type:hybrid;
	mso-list-template-ids:-2113874330 134873111 134873113 134873115 134873103 134873113 134873115 134873103 134873113 134873115;}
@list l28:level1
	{mso-level-number-format:alpha-lower;
	mso-level-text:"%1\)";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:64.35pt;
	text-indent:-18.0pt;}
@list l28:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:100.35pt;
	text-indent:-18.0pt;}
@list l28:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:136.35pt;
	text-indent:-9.0pt;}
@list l28:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:172.35pt;
	text-indent:-18.0pt;}
@list l28:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:208.35pt;
	text-indent:-18.0pt;}
@list l28:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:244.35pt;
	text-indent:-9.0pt;}
@list l28:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:280.35pt;
	text-indent:-18.0pt;}
@list l28:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:316.35pt;
	text-indent:-18.0pt;}
@list l28:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:352.35pt;
	text-indent:-9.0pt;}
@list l29
	{mso-list-id:1215847316;
	mso-list-template-ids:867194576;}
@list l29:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:10.8pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:9.0pt;
	font-family:Symbol;
	color:#A04DA3;
	mso-themecolor:accent3;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l29:level2
	{mso-level-number-format:bullet;
	mso-level-text:\F0A8;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:23.05pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:6.0pt;
	font-family:Wingdings;
	color:#438086;
	mso-themecolor:accent2;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l29:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:35.3pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l29:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:47.55pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l29:level5
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:59.8pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l29:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:72.05pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l29:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:84.3pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l29:level8
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:96.55pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l29:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:108.8pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l30
	{mso-list-id:1392726825;
	mso-list-type:hybrid;
	mso-list-template-ids:1870663850 134873103 134873113 134873115 134873103 134873113 134873115 134873103 134873113 134873115;}
@list l30:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:18.0pt;
	text-indent:-18.0pt;}
@list l30:level2
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:54.0pt;
	text-indent:-18.0pt;}
@list l30:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:90.0pt;
	text-indent:-9.0pt;}
@list l30:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:126.0pt;
	text-indent:-18.0pt;}
@list l30:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:162.0pt;
	text-indent:-18.0pt;}
@list l30:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:198.0pt;
	text-indent:-9.0pt;}
@list l30:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:234.0pt;
	text-indent:-18.0pt;}
@list l30:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:270.0pt;
	text-indent:-18.0pt;}
@list l30:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:306.0pt;
	text-indent:-9.0pt;}
@list l31
	{mso-list-id:1676149291;
	mso-list-template-ids:867194576;
	mso-list-style-id:1033651875;}
@list l31:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:10.8pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:9.0pt;
	font-family:Symbol;
	color:#A04DA3;
	mso-themecolor:accent3;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l31:level2
	{mso-level-number-format:bullet;
	mso-level-text:\F0A8;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:23.05pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:6.0pt;
	font-family:Wingdings;
	color:#438086;
	mso-themecolor:accent2;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l31:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:35.3pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l31:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:47.55pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l31:level5
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:59.8pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l31:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:72.05pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l31:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:84.3pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l31:level8
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:96.55pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l31:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:108.8pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l32
	{mso-list-id:1863125809;
	mso-list-template-ids:2059837774;
	mso-list-style-id:306937073;}
@list l32:level1
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:14.4pt;
	text-indent:-14.4pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	color:#A04DA3;
	mso-themecolor:accent3;
	mso-ansi-font-style:normal;}
@list l32:level2
	{mso-level-number-format:alpha-upper;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:39.6pt;
	text-indent:-14.4pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	color:#438086;
	mso-themecolor:accent2;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l32:level3
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:64.8pt;
	text-indent:-14.4pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l32:level4
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:90.0pt;
	text-indent:-14.4pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l32:level5
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:115.2pt;
	text-indent:-14.4pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l32:level6
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:140.4pt;
	text-indent:-14.4pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l32:level7
	{mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:165.6pt;
	text-indent:-14.4pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l32:level8
	{mso-level-number-format:alpha-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:190.8pt;
	text-indent:-14.4pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l32:level9
	{mso-level-number-format:roman-lower;
	mso-level-tab-stop:none;
	mso-level-number-position:right;
	margin-left:216.0pt;
	text-indent:-14.4pt;
	mso-ansi-font-size:10.0pt;
	font-family:"Times New Roman","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l33
	{mso-list-id:1921089521;
	mso-list-type:hybrid;
	mso-list-template-ids:1881985564 122836048 -197617520 -1700902244 -1769587778 -1734836328 67698693 67698689 67698691 67698693;}
@list l33:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:72.0pt;
	text-indent:-18.0pt;
	font-family:Symbol;
	mso-bidi-font-family:Symbol;
	color:#A04DA3;
	mso-themecolor:accent3;}
@list l33:level2
	{mso-level-number-format:bullet;
	mso-level-text:\F0A8;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:108.0pt;
	text-indent:-18.0pt;
	mso-ansi-font-size:6.0pt;
	mso-bidi-font-size:6.0pt;
	font-family:Wingdings;
	mso-bidi-font-family:Wingdings;
	color:#438086;
	mso-themecolor:accent2;}
@list l33:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:144.0pt;
	text-indent:-18.0pt;
	mso-ansi-font-size:8.0pt;
	mso-bidi-font-size:8.0pt;
	font-family:Symbol;
	mso-bidi-font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l33:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:180.0pt;
	text-indent:-18.0pt;
	mso-ansi-font-size:8.0pt;
	mso-bidi-font-size:8.0pt;
	font-family:Symbol;
	mso-bidi-font-family:Symbol;}
@list l33:level5
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:216.0pt;
	text-indent:-18.0pt;
	mso-ansi-font-size:8.0pt;
	mso-bidi-font-size:8.0pt;
	font-family:Symbol;
	mso-bidi-font-family:Symbol;}
@list l33:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:252.0pt;
	text-indent:-18.0pt;
	font-family:Wingdings;
	mso-bidi-font-family:Wingdings;}
@list l33:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:288.0pt;
	text-indent:-18.0pt;
	font-family:Symbol;
	mso-bidi-font-family:Symbol;}
@list l33:level8
	{mso-level-number-format:bullet;
	mso-level-text:o;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:324.0pt;
	text-indent:-18.0pt;
	font-family:"Courier New";}
@list l33:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0A7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:360.0pt;
	text-indent:-18.0pt;
	font-family:Wingdings;
	mso-bidi-font-family:Wingdings;}
@list l34
	{mso-list-id:1987314324;
	mso-list-template-ids:867194576;
	mso-list-style-id:1033651875;}
@list l34:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:10.8pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:9.0pt;
	font-family:Symbol;
	color:#A04DA3;
	mso-themecolor:accent3;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l34:level2
	{mso-level-number-format:bullet;
	mso-level-text:\F0A8;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:23.05pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:6.0pt;
	font-family:Wingdings;
	color:#438086;
	mso-themecolor:accent2;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l34:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:35.3pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l34:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:47.55pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l34:level5
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:59.8pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l34:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:72.05pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l34:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:84.3pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l34:level8
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:96.55pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l34:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:108.8pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l35
	{mso-list-id:1989287003;
	mso-list-template-ids:867194576;
	mso-list-style-id:1033651875;}
@list l35:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:10.8pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:9.0pt;
	font-family:Symbol;
	color:#A04DA3;
	mso-themecolor:accent3;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l35:level2
	{mso-level-number-format:bullet;
	mso-level-text:\F0A8;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:23.05pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:6.0pt;
	font-family:Wingdings;
	color:#438086;
	mso-themecolor:accent2;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l35:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:35.3pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l35:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:47.55pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l35:level5
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:59.8pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l35:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:72.05pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l35:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:84.3pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l35:level8
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:96.55pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l35:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:108.8pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l36
	{mso-list-id:2114083849;
	mso-list-template-ids:867194576;
	mso-list-style-id:1033651875;}
@list l36:level1
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:10.8pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:9.0pt;
	font-family:Symbol;
	color:#A04DA3;
	mso-themecolor:accent3;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l36:level2
	{mso-level-number-format:bullet;
	mso-level-text:\F0A8;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:23.05pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:6.0pt;
	font-family:Wingdings;
	color:#438086;
	mso-themecolor:accent2;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l36:level3
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:35.3pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l36:level4
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:47.55pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
@list l36:level5
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:59.8pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l36:level6
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:72.05pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l36:level7
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:84.3pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l36:level8
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:96.55pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l36:level9
	{mso-level-number-format:bullet;
	mso-level-text:\F0B7;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:108.8pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:8.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l35:level1 lfo20
	{mso-level-start-at:0;
	mso-level-number-format:arabic;
	mso-level-numbering:continue;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l35:level2 lfo20
	{mso-level-start-at:0;
	mso-level-number-format:arabic;
	mso-level-numbering:continue;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l35:level3 lfo20
	{mso-level-start-at:0;
	mso-level-number-format:arabic;
	mso-level-numbering:continue;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l35:level4 lfo20
	{mso-level-start-at:0;
	mso-level-number-format:arabic;
	mso-level-numbering:continue;
	mso-level-text:"";
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:0cm;
	text-indent:0cm;}
@list l35:level5 lfo20
	{mso-level-numbering:continue;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:59.8pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:9.0pt;
	mso-bidi-font-size:9.0pt;
	font-family:Symbol;
	color:#53548A;
	mso-themecolor:accent1;}
@list l31:level1 lfo21
	{mso-level-numbering:continue;
	mso-level-tab-stop:none;
	mso-level-number-position:left;
	margin-left:10.8pt;
	text-indent:-10.8pt;
	mso-ansi-font-size:9.0pt;
	mso-bidi-font-size:9.0pt;
	font-family:Symbol;
	color:#A04DA3;
	mso-themecolor:accent3;
	mso-ansi-font-weight:normal;
	mso-ansi-font-style:normal;}
ol
	{margin-bottom:0cm;}
ul
	{margin-bottom:0cm;}
-->
</style>
<!--[if gte mso 10]>
<style>
 /* Style Definitions */
 table.MsoNormalTable
	{mso-style-name:"Tabla normal";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-noshow:yes;
	mso-style-priority:99;
	mso-style-parent:"";
	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
	mso-para-margin-top:0cm;
	mso-para-margin-right:0cm;
	mso-para-margin-bottom:10.0pt;
	mso-para-margin-left:0cm;
	line-height:115%;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;}
table.MsoTableGrid
	{mso-style-name:"Tabla con cuadrícula";
	mso-tstyle-rowband-size:0;
	mso-tstyle-colband-size:0;
	mso-style-priority:1;
	mso-style-unhide:no;
	border:solid black 1.0pt;
	mso-border-themecolor:text1;
	mso-border-alt:solid black .5pt;
	mso-border-themecolor:text1;
	mso-padding-alt:0cm 5.4pt 0cm 5.4pt;
	mso-border-insideh:.5pt solid black;
	mso-border-insideh-themecolor:text1;
	mso-border-insidev:.5pt solid black;
	mso-border-insidev-themecolor:text1;
	mso-para-margin:0cm;
	mso-para-margin-bottom:.0001pt;
	mso-pagination:widow-orphan;
	font-size:11.0pt;
	font-family:"Georgia","serif";
	mso-ascii-font-family:Georgia;
	mso-ascii-theme-font:minor-latin;
	mso-hansi-font-family:Georgia;
	mso-hansi-theme-font:minor-latin;}
</style>
<![endif]--><!--[if gte mso 9]><xml>
 <o:shapedefaults v:ext="edit" spidmax="2049" fillcolor="white">
  <v:fill color="white"/>
  <o:colormru v:ext="edit" colors="#334c4f,#79b5b0,#b77851,#d1e1e3,#066,#7ea8ac,#4e767a,#293d3f"/>
 </o:shapedefaults></xml><![endif]--><!--[if gte mso 9]><xml>
 <o:shapelayout v:ext="edit">
  <o:idmap v:ext="edit" data="1"/>
 </o:shapelayout></xml><![endif]-->
</head>

<body lang=ES-MX link="#67AFBD" vlink="#C2A874" style='tab-interval:36.0pt'>

<div class=WordSection1><w:Sdt
 PrefixMappings="xmlns:ns0='http://purl.org/dc/elements/1.1/' xmlns:ns1='http://schemas.openxmlformats.org/package/2006/metadata/core-properties' "
 Xpath="/ns1:coreProperties[1]/ns0:title[1]"
 DocPart="4EDDE979D8C74B159E9108ECCA616418" Text="t"
 StoreItemID="X_6C3C8BC8-F283-45AE-878A-BAB7291924A1" ID="223570831">
 <p class=MsoTitle><u><span style='font-size:12.0pt;line-height:115%;
 font-family:"Georgia","serif";mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
 minor-latin'>Descarga archivos de Bucket S3 con PHP</span></u><span
 style='font-size:12.0pt;line-height:115%;font-family:"Georgia","serif";
 mso-ascii-theme-font:minor-latin;mso-fareast-font-family:"Times New Roman";
 mso-fareast-theme-font:minor-fareast;mso-hansi-theme-font:minor-latin;
 color:black;mso-style-textfill-fill-color:black;mso-style-textfill-fill-alpha:
 100.0%'><o:p></o:p></span><u><span style='font-size:12.0pt;line-height:115%;
 font-family:"Georgia","serif";mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
 minor-latin'><w:sdtPr></w:sdtPr></span></u></p>
</w:Sdt>

<p class=MsoSubtitle><span style='color:#53548A;mso-themecolor:accent1'><w:Sdt
 PrefixMappings="xmlns:ns0='http://purl.org/dc/elements/1.1/' xmlns:ns1='http://schemas.openxmlformats.org/package/2006/metadata/core-properties' "
 Xpath="/ns1:coreProperties[1]/ns0:subject[1]"
 DocPart="2EF6BE6D219B462F9C903BA8A2A888EC" Text="t"
 StoreItemID="X_6C3C8BC8-F283-45AE-878A-BAB7291924A1" ID="223570817">AWS SDK
 for PHP</w:Sdt><o:p></o:p></span></p>

<p class=MsoNormal><span style='font-size:12.0pt;line-height:115%'>A
continuación de describe el proceso para descarga de archivos alojados en un
bocket S3 AWS con la SDK de AWS y PHP. <o:p></o:p></span></p>

<p class=MsoNormal><span style='mso-no-proof:yes'><v:shapetype id="_x0000_t75"
 coordsize="21600,21600" o:spt="75" o:preferrelative="t" path="m@4@5l@4@11@9@11@9@5xe"
 filled="f" stroked="f">
 <v:stroke joinstyle="miter"/>
 <v:formulas>
  <v:f eqn="if lineDrawn pixelLineWidth 0"/>
  <v:f eqn="sum @0 1 0"/>
  <v:f eqn="sum 0 0 @1"/>
  <v:f eqn="prod @2 1 2"/>
  <v:f eqn="prod @3 21600 pixelWidth"/>
  <v:f eqn="prod @3 21600 pixelHeight"/>
  <v:f eqn="sum @0 0 1"/>
  <v:f eqn="prod @6 1 2"/>
  <v:f eqn="prod @7 21600 pixelWidth"/>
  <v:f eqn="sum @8 21600 0"/>
  <v:f eqn="prod @7 21600 pixelHeight"/>
  <v:f eqn="sum @10 21600 0"/>
 </v:formulas>
 <v:path o:extrusionok="f" gradientshapeok="t" o:connecttype="rect"/>
 <o:lock v:ext="edit" aspectratio="t"/>
</v:shapetype><v:shape id="Imagen_x0020_4" o:spid="_x0000_i1026" type="#_x0000_t75"
 style='width:453pt;height:216.75pt;visibility:visible;mso-wrap-style:square'>
 <v:imagedata src="List%20objects%20and%20download%20from%20AWS%20S3_archivos/image004.png"
  o:title=""/>
</v:shape></span><span style='font-size:12.0pt;line-height:115%'><o:p></o:p></span></p>

<p class=MsoNormal align=right style='text-align:right'><i style='mso-bidi-font-style:
normal'><u><span style='font-size:8.0pt;mso-bidi-font-size:12.0pt;line-height:
115%'>Arquitectura general<o:p></o:p></span></u></i></p>

<p class=MsoNormal><span style='font-size:12.0pt;line-height:115%'>Requisitos
para poder hacer uso del Bucket:<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpFirst style='text-indent:-18.0pt;mso-list:l15 level1 lfo41'><![if !supportLists]><span
style='font-size:12.0pt;line-height:115%;mso-bidi-font-family:Georgia;
mso-bidi-theme-font:minor-latin'><span style='mso-list:Ignore'>a)<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
style='font-size:12.0pt;line-height:115%'>Tener los accesos a la SDK:<span
style='mso-tab-count:1'>           </span><o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:72.0pt;mso-add-space:
auto;text-indent:-18.0pt;mso-list:l15 level2 lfo41'><![if !supportLists]><span
style='font-size:12.0pt;line-height:115%;mso-bidi-font-family:Georgia;
mso-bidi-theme-font:minor-latin'><span style='mso-list:Ignore'>a.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
style='font-size:12.0pt;line-height:115%'>Key<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:72.0pt;mso-add-space:
auto;text-indent:-18.0pt;mso-list:l15 level2 lfo41'><![if !supportLists]><span
style='font-size:12.0pt;line-height:115%;mso-bidi-font-family:Georgia;
mso-bidi-theme-font:minor-latin'><span style='mso-list:Ignore'>b.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
style='font-size:12.0pt;line-height:115%'>Secret Key<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:72.0pt;mso-add-space:
auto;text-indent:-18.0pt;mso-list:l15 level2 lfo41'><![if !supportLists]><span
style='font-size:12.0pt;line-height:115%;mso-bidi-font-family:Georgia;
mso-bidi-theme-font:minor-latin'><span style='mso-list:Ignore'>c.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
style='font-size:12.0pt;line-height:115%'>Nombre Bucket<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='text-indent:-18.0pt;mso-list:l15 level1 lfo41'><![if !supportLists]><span
style='font-size:12.0pt;line-height:115%;mso-bidi-font-family:Georgia;
mso-bidi-theme-font:minor-latin'><span style='mso-list:Ignore'>b)<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
style='font-size:12.0pt;line-height:115%'>Requisitos de SDK AWS PHP<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:72.0pt;mso-add-space:
auto;text-indent:-18.0pt;mso-list:l15 level2 lfo41'><![if !supportLists]><span
style='font-size:12.0pt;line-height:115%;mso-bidi-font-family:Georgia;
mso-bidi-theme-font:minor-latin'><span style='mso-list:Ignore'>a.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
style='font-size:12.0pt;line-height:115%'>Tener habilitadas las extensiones:<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:108.0pt;mso-add-space:
auto;text-indent:-108.0pt;mso-text-indent-alt:-9.0pt;mso-list:l15 level3 lfo41'><![if !supportLists]><span
style='font-size:12.0pt;line-height:115%;mso-bidi-font-family:Georgia;
mso-bidi-theme-font:minor-latin'><span style='mso-list:Ignore'><span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>i.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:12.0pt;line-height:115%'>OpenSSL
PHP<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:108.0pt;mso-add-space:
auto;text-indent:-108.0pt;mso-text-indent-alt:-9.0pt;mso-list:l15 level3 lfo41'><![if !supportLists]><span
style='font-size:12.0pt;line-height:115%;mso-bidi-font-family:Georgia;
mso-bidi-theme-font:minor-latin'><span style='mso-list:Ignore'><span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>ii.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:12.0pt;line-height:115%'>cURL<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:108.0pt;mso-add-space:
auto;text-indent:-108.0pt;mso-text-indent-alt:-9.0pt;mso-list:l15 level3 lfo41'><![if !supportLists]><span
style='font-size:12.0pt;line-height:115%;mso-bidi-font-family:Georgia;
mso-bidi-theme-font:minor-latin'><span style='mso-list:Ignore'><span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>iii.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:12.0pt;line-height:115%'>OPCache<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:108.0pt;mso-add-space:
auto;text-indent:-108.0pt;mso-text-indent-alt:-9.0pt;mso-list:l15 level3 lfo41'><![if !supportLists]><span
style='font-size:12.0pt;line-height:115%;mso-bidi-font-family:Georgia;
mso-bidi-theme-font:minor-latin'><span style='mso-list:Ignore'><span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span>iv.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span style='font-size:12.0pt;line-height:115%'>Composer
(opcional, pero muy recomendado)<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:0cm;mso-add-space:auto'><b
style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;line-height:
115%'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:0cm;mso-add-space:auto'><b
style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;line-height:
115%'>Instalación de AWS SDK for PHP:<o:p></o:p></span></b></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:0cm;mso-add-space:auto'><span
style='font-size:12.0pt;line-height:115%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:0cm;mso-add-space:auto;
text-indent:1.0cm'><span style='font-size:12.0pt;line-height:115%'>La
instalación de la AWS SDK for PHP es posible realizarla por:<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:64.35pt;mso-add-space:
auto;text-indent:-18.0pt;mso-list:l28 level1 lfo42'><![if !supportLists]><span
style='font-size:12.0pt;line-height:115%;mso-bidi-font-family:Georgia;
mso-bidi-theme-font:minor-latin'><span style='mso-list:Ignore'>a)<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
style='font-size:12.0pt;line-height:115%'>Composer<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:64.35pt;mso-add-space:
auto;text-indent:-18.0pt;mso-list:l28 level1 lfo42'><![if !supportLists]><span
style='font-size:12.0pt;line-height:115%;mso-bidi-font-family:Georgia;
mso-bidi-theme-font:minor-latin'><span style='mso-list:Ignore'>b)<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
style='font-size:12.0pt;line-height:115%'>Phar<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:64.35pt;mso-add-space:
auto;text-indent:-18.0pt;mso-list:l28 level1 lfo42'><![if !supportLists]><span
style='font-size:12.0pt;line-height:115%;mso-bidi-font-family:Georgia;
mso-bidi-theme-font:minor-latin'><span style='mso-list:Ignore'>c)<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
style='font-size:12.0pt;line-height:115%'>Zip<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:64.35pt;mso-add-space:
auto'><span style='font-size:12.0pt;line-height:115%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:64.35pt;mso-add-space:
auto'><span style='font-size:12.0pt;line-height:115%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpLast style='margin-left:18.0pt;mso-add-space:auto;
text-indent:-18.0pt;mso-list:l11 level1 lfo43'><![if !supportLists]><b
style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;line-height:
115%;mso-bidi-font-family:Georgia;mso-bidi-theme-font:minor-latin'><span
style='mso-list:Ignore'>a)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span></span></span></b><![endif]><b style='mso-bidi-font-weight:normal'><span
style='font-size:12.0pt;line-height:115%'>Composer<o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify'><span lang=ES style='font-size:
12.0pt;line-height:115%;mso-ansi-language:ES'>El uso de Composer es la forma
recomendada de instalar AWS SDK para PHP. Composer es una herramienta de
administración de dependencias para PHP que le permite declarar las
dependencias que necesita su proyecto e instalarlas en su proyecto.<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpFirst style='text-indent:-18.0pt;mso-list:l12 level1 lfo44'><![if !supportLists]><span
lang=ES style='font-size:12.0pt;line-height:115%;mso-bidi-font-family:Georgia;
mso-bidi-theme-font:minor-latin;mso-ansi-language:ES'><span style='mso-list:
Ignore'>1.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES style='font-size:12.0pt;
line-height:115%;mso-ansi-language:ES'>Crear archivo composer.json en raíz de
proyecto<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpLast style='text-indent:-18.0pt;mso-list:l12 level1 lfo44'><![if !supportLists]><span
lang=ES style='font-size:12.0pt;line-height:115%;mso-bidi-font-family:Georgia;
mso-bidi-theme-font:minor-latin;mso-ansi-language:ES'><span style='mso-list:
Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES style='font-size:12.0pt;
line-height:115%;mso-ansi-language:ES'>Colocar en “<i style='mso-bidi-font-style:
normal'>require</i>”:<o:p></o:p></span></p>

<pre style='margin-left:45.8pt;background:#2B2B2B'><span style='font-size:12.0pt;
font-family:"Georgia","serif";mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
minor-latin;color:#A9B7C6'>{<br>
<span style='mso-spacerun:yes'>  </span></span><span style='font-size:12.0pt;
font-family:"Georgia","serif";mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
minor-latin;color:#6A8759'>&quot;require&quot;</span><span style='font-size:
12.0pt;font-family:"Georgia","serif";mso-ascii-theme-font:minor-latin;
mso-hansi-theme-font:minor-latin;color:#CC7832'>: </span><span
style='font-size:12.0pt;font-family:"Georgia","serif";mso-ascii-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin;color:#A9B7C6'>{<br>
<span style='mso-spacerun:yes'>    </span></span><span style='font-size:12.0pt;
font-family:"Georgia","serif";mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
minor-latin;color:#9876AA'>&quot;aws/aws-sdk-php&quot;</span><span
style='font-size:12.0pt;font-family:"Georgia","serif";mso-ascii-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin;color:#CC7832'>: </span><span
style='font-size:12.0pt;font-family:"Georgia","serif";mso-ascii-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin;color:#6A8759'>&quot;2.7.*&quot;<br>
<span style='mso-spacerun:yes'>  </span></span><span style='font-size:12.0pt;
font-family:"Georgia","serif";mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
minor-latin;color:#A9B7C6'>}<br>
}<o:p></o:p></span></pre>

<p class=MsoNormal><span lang=ES style='font-size:12.0pt;line-height:115%;
mso-ansi-language:ES'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpFirst style='text-indent:-18.0pt;mso-list:l12 level1 lfo44'><![if !supportLists]><span
lang=ES style='font-size:12.0pt;line-height:115%;mso-bidi-font-family:Georgia;
mso-bidi-theme-font:minor-latin;mso-ansi-language:ES'><span style='mso-list:
Ignore'>3.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES style='font-size:12.0pt;
line-height:115%;mso-ansi-language:ES'>En la línea de comandos ejecutar:<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle><span style='font-size:12.0pt;line-height:
115%;mso-no-proof:yes'><v:shape id="Imagen_x0020_1" o:spid="_x0000_i1025"
 type="#_x0000_t75" style='width:375pt;height:136.5pt;visibility:visible;
 mso-wrap-style:square'>
 <v:imagedata src="List%20objects%20and%20download%20from%20AWS%20S3_archivos/image005.png"
  o:title=""/>
</v:shape></span><span lang=ES style='font-size:12.0pt;line-height:115%;
mso-ansi-language:ES'><o:p></o:p></span></p>

<p class=MsoListParagraphCxSpLast style='margin-left:18.0pt;mso-add-space:auto;
text-indent:-18.0pt;mso-list:l11 level1 lfo43'><![if !supportLists]><b
style='mso-bidi-font-weight:normal'><span lang=ES style='font-size:12.0pt;
line-height:115%;mso-bidi-font-family:Georgia;mso-bidi-theme-font:minor-latin;
mso-ansi-language:ES'><span style='mso-list:Ignore'>b)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span></span></span></b><![endif]><b style='mso-bidi-font-weight:normal'><span
lang=ES style='font-size:12.0pt;line-height:115%;mso-ansi-language:ES'>Phar<o:p></o:p></span></b></p>

<pre style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l11 level2 lfo43'><![if !supportLists]><span
style='font-size:12.0pt;font-family:"Georgia","serif";mso-ascii-theme-font:
minor-latin;mso-fareast-font-family:Georgia;mso-fareast-theme-font:minor-latin;
mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Georgia;mso-bidi-theme-font:
minor-latin'><span style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'> </span></span></span><![endif]><span
lang=ES style='font-size:12.0pt;font-family:"Georgia","serif";mso-ascii-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin;mso-ansi-language:ES'>Puede descargar el paquete phar y simplemente incluirlo en sus scripts para empezar: Link </span><a
href="http://docs.aws.amazon.com/aws-sdk-php/v3/download/aws.phar"><span
lang=ES style='font-size:12.0pt;font-family:"Georgia","serif";mso-ascii-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin;mso-ansi-language:ES'>http://docs.aws.amazon.com/aws-sdk-php/v3/download/aws.phar</span></a><span
style='font-size:12.0pt;font-family:"Georgia","serif";mso-ascii-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin'><o:p></o:p></span></pre><pre
style='margin-left:63.0pt;background:#2B2B2B'><b><span style='font-size:12.0pt;
font-family:"Georgia","serif";mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
minor-latin;color:#CC7832;background:#232525'>&lt;?php<br>
require </span></b><span style='font-size:12.0pt;font-family:"Georgia","serif";
mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;color:#6A8759;
background:#232525'>'path/to/aws.phar'</span><span style='font-size:12.0pt;
font-family:"Georgia","serif";mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
minor-latin;color:#CC7832;background:#232525'>;</span><span style='font-size:
12.0pt;font-family:"Georgia","serif";mso-ascii-theme-font:minor-latin;
mso-hansi-theme-font:minor-latin;color:#A9B7C6'><o:p></o:p></span></pre><pre
style='margin-left:54.0pt'><span style='font-size:12.0pt;font-family:"Georgia","serif";
mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin'><o:p>&nbsp;</o:p></span></pre>

<p class=MsoListParagraph style='margin-left:18.0pt;mso-add-space:auto;
text-indent:-18.0pt;mso-list:l11 level1 lfo43'><![if !supportLists]><b
style='mso-bidi-font-weight:normal'><span lang=ES style='font-size:12.0pt;
line-height:115%;mso-bidi-font-family:Georgia;mso-bidi-theme-font:minor-latin;
mso-ansi-language:ES'><span style='mso-list:Ignore'>c)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span></span></span></b><![endif]><b style='mso-bidi-font-weight:normal'><span
lang=ES style='font-size:12.0pt;line-height:115%;mso-ansi-language:ES'>Vía Zip<o:p></o:p></span></b></p>

<pre style='margin-left:54.0pt;text-indent:-18.0pt;mso-list:l21 level1 lfo45'><![if !supportLists]><span
style='font-size:12.0pt;font-family:"Georgia","serif";mso-ascii-theme-font:
minor-latin;mso-fareast-font-family:Georgia;mso-fareast-theme-font:minor-latin;
mso-hansi-theme-font:minor-latin;mso-bidi-font-family:Georgia;mso-bidi-theme-font:
minor-latin'><span style='mso-list:Ignore'>1.<span style='font:7.0pt "Times New Roman"'> </span></span></span><![endif]><span
lang=ES style='font-size:12.0pt;font-family:"Georgia","serif";mso-ascii-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin;mso-ansi-language:ES'>Descargar el archivo zip, descomprimirlo en su proyecto a una ubicación de su elección e incluir el cargador automático:</span><span
style='font-size:12.0pt;font-family:"Georgia","serif";mso-ascii-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin'><o:p></o:p></span></pre><pre
style='margin-left:54.0pt'><a
href="http://docs.aws.amazon.com/aws-sdk-php/v3/download/aws.zip"><span
style='font-size:12.0pt;font-family:"Georgia","serif";mso-ascii-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin'>http://docs.aws.amazon.com/aws-sdk-php/v3/download/aws.zip</span></a><span
style='font-size:12.0pt;font-family:"Georgia","serif";mso-ascii-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin'><o:p></o:p></span></pre><pre><span
style='font-size:12.0pt;font-family:"Georgia","serif";mso-ascii-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin'><o:p>&nbsp;</o:p></span></pre>

<p class=MsoListParagraph style='margin-left:54.0pt;mso-add-space:auto;
text-indent:-18.0pt;mso-list:l21 level1 lfo45'><![if !supportLists]><span
lang=ES style='font-size:12.0pt;line-height:115%;mso-bidi-font-family:Georgia;
mso-bidi-theme-font:minor-latin;mso-ansi-language:ES'><span style='mso-list:
Ignore'>2.<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES style='font-size:12.0pt;
line-height:115%;mso-ansi-language:ES'>Incluirlo en el proyecto:<o:p></o:p></span></p>

<pre style='margin-left:54.0pt;background:#2B2B2B'><b><span style='font-size:
11.0pt;mso-bidi-font-size:9.0pt;font-family:"Georgia","serif";mso-ascii-theme-font:
minor-latin;mso-hansi-theme-font:minor-latin;color:#CC7832;background:#232525'>&lt;?php<br>
require </span></b><span style='font-size:11.0pt;mso-bidi-font-size:9.0pt;
font-family:"Georgia","serif";mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:
minor-latin;color:#6A8759;background:#232525'>'/path/to/aws-autoloader.php'</span><span
style='font-size:11.0pt;mso-bidi-font-size:9.0pt;font-family:"Georgia","serif";
mso-ascii-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;color:#CC7832;
background:#232525'>;</span><span style='font-size:11.0pt;mso-bidi-font-size:
9.0pt;font-family:"Georgia","serif";mso-ascii-theme-font:minor-latin;
mso-hansi-theme-font:minor-latin;color:#A9B7C6'><o:p></o:p></span></pre>

<p class=MsoListParagraphCxSpFirst style='margin-left:54.0pt;mso-add-space:
auto'><span lang=ES style='font-size:12.0pt;line-height:115%;mso-ansi-language:
ES'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:54.0pt;mso-add-space:
auto'><span lang=ES style='font-size:12.0pt;line-height:115%;mso-ansi-language:
ES'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:54.0pt;mso-add-space:
auto'><span lang=ES style='font-size:12.0pt;line-height:115%;mso-ansi-language:
ES'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:0cm;mso-add-space:auto'><b
style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;line-height:
115%'>Configuración y puesta en marcha AWS SDK for PHP:<o:p></o:p></span></b></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:0cm;mso-add-space:auto'><b
style='mso-bidi-font-weight:normal'><span style='font-size:12.0pt;line-height:
115%'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:0cm;mso-add-space:auto;
text-align:justify'><span style='font-size:12.0pt;line-height:115%'>Una vez
descargado el SDK se procede a crear los archivos de configuración para
facilitar la utilización del mismo.<i style='mso-bidi-font-style:normal'> </i></span><i
style='mso-bidi-font-style:normal'><span style='font-size:11.0pt;mso-bidi-font-size:
12.0pt;line-height:115%'>En este ejemplo se descargó el SDK mediante composer</span></i><span
style='font-size:11.0pt;mso-bidi-font-size:12.0pt;line-height:115%'>:<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:0cm;mso-add-space:auto'><span
style='font-size:12.0pt;line-height:115%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:18.0pt;mso-add-space:
auto;text-indent:-18.0pt;mso-list:l30 level1 lfo46'><![if !supportLists]><span
style='font-size:12.0pt;line-height:115%;mso-bidi-font-family:Georgia;
mso-bidi-theme-font:minor-latin'><span style='mso-list:Ignore'>1.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
style='font-size:12.0pt;line-height:115%'>Creamos una carpeta app (es posible
guardar estos archivos en cualquier carpeta)<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:18.0pt;mso-add-space:
auto;text-indent:-18.0pt;mso-list:l30 level1 lfo46'><![if !supportLists]><span
style='font-size:12.0pt;line-height:115%;mso-bidi-font-family:Georgia;
mso-bidi-theme-font:minor-latin'><span style='mso-list:Ignore'>2.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
style='font-size:12.0pt;line-height:115%'>Se crean los archivos:<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:54.0pt;mso-add-space:
auto;text-indent:-18.0pt;mso-list:l30 level2 lfo46'><![if !supportLists]><span
style='font-size:12.0pt;line-height:115%;mso-bidi-font-family:Georgia;
mso-bidi-theme-font:minor-latin'><span style='mso-list:Ignore'>a.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
style='font-size:12.0pt;line-height:115%'>config.php<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:54.0pt;mso-add-space:
auto;text-indent:-18.0pt;mso-list:l30 level2 lfo46'><![if !supportLists]><span
style='font-size:12.0pt;line-height:115%;mso-bidi-font-family:Georgia;
mso-bidi-theme-font:minor-latin'><span style='mso-list:Ignore'>b.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
style='font-size:12.0pt;line-height:115%'>start.php<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpLast style='margin-left:18.0pt;mso-add-space:auto;
text-indent:-18.0pt;mso-list:l30 level1 lfo46'><![if !supportLists]><span
style='font-size:12.0pt;line-height:115%;mso-bidi-font-family:Georgia;
mso-bidi-theme-font:minor-latin'><span style='mso-list:Ignore'>3.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
style='font-size:12.0pt;line-height:115%'>Dentro del config.php:<o:p></o:p></span></p>

<pre style='margin-left:54.0pt;background:#2B2B2B'><b><span style='font-size:
9.0pt;color:#CC7832;background:#232525'>&lt;?php<br>
</span></b><i><span style='font-size:9.0pt;color:#629755;background:#232525'><br>
</span></i><b><span style='font-size:9.0pt;color:#CC7832;background:#232525'>return </span></b><span
style='font-size:9.0pt;color:#A9B7C6;background:#232525'>[<br>
<span style='mso-spacerun:yes'>    </span></span><span style='font-size:9.0pt;
color:#6A8759;background:#232525'>&quot;s3&quot; </span><span style='font-size:
9.0pt;color:#A9B7C6;background:#232525'>=&gt; [<br>
<span style='mso-spacerun:yes'>        </span></span><span style='font-size:
9.0pt;color:#6A8759;background:#232525'>&quot;key&quot; </span><span
style='font-size:9.0pt;color:#A9B7C6;background:#232525'>=&gt; </span><span
style='font-size:9.0pt;color:#6A8759;background:#232525'>&quot;&lt;Access Key AWS&gt;&quot;</span><span
style='font-size:9.0pt;color:#CC7832;background:#232525'>,<br>
<span style='mso-spacerun:yes'>        </span></span><span style='font-size:
9.0pt;color:#6A8759;background:#232525'>&quot;secret&quot; </span><span
style='font-size:9.0pt;color:#A9B7C6;background:#232525'>=&gt; </span><span
style='font-size:9.0pt;color:#6A8759;background:#232525'>&quot;&lt;Secret Key&gt;&quot;</span><span
style='font-size:9.0pt;color:#CC7832;background:#232525'>,<br>
<span style='mso-spacerun:yes'>        </span></span><span style='font-size:
9.0pt;color:#6A8759;background:#232525'>&quot;bucket&quot; </span><span
style='font-size:9.0pt;color:#A9B7C6;background:#232525'>=&gt; </span><span
style='font-size:9.0pt;color:#6A8759;background:#232525'>&quot;&lt;Name Bucket&gt;&quot;<br>
<span style='mso-spacerun:yes'>    </span></span><span style='font-size:9.0pt;
color:#A9B7C6;background:#232525'>]<br>
]</span><span style='font-size:9.0pt;color:#CC7832;background:#232525'>;</span><span
style='font-size:9.0pt;color:#A9B7C6'><o:p></o:p></span></pre>

<p class=MsoListParagraph style='margin-left:18.0pt;mso-add-space:auto;
text-indent:-18.0pt;mso-list:l30 level1 lfo46'><![if !supportLists]><span
style='font-size:12.0pt;line-height:115%;mso-bidi-font-family:Georgia;
mso-bidi-theme-font:minor-latin'><span style='mso-list:Ignore'>4.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
style='font-size:12.0pt;line-height:115%'>Dentro de start.php<o:p></o:p></span></p>

<pre style='margin-left:54.0pt;background:#2B2B2B'><b><span style='font-size:
9.0pt;color:#CC7832;background:#232525'>&lt;?php<br>
</span></b><i><span style='font-size:9.0pt;color:#629755;background:#232525'><br>
</span></i><b><span style='font-size:9.0pt;color:#CC7832;background:#232525'>use </span></b><span
style='font-size:9.0pt;color:#A9B7C6;background:#232525'>Aws\S3\S3Client</span><span
style='font-size:9.0pt;color:#CC7832;background:#232525'>;<br>
<br>
<b>require </b></span><span style='font-size:9.0pt;color:#6A8759;background:
#232525'>'vendor/autoload.php'</span><span style='font-size:9.0pt;color:#CC7832;
background:#232525'>;<br>
<br>
</span><span style='font-size:9.0pt;color:#9876AA;background:#232525'>$config </span><span
style='font-size:9.0pt;color:#A9B7C6;background:#232525'>= </span><b><span
style='font-size:9.0pt;color:#CC7832;background:#232525'>require </span></b><span
style='font-size:9.0pt;color:#A9B7C6;background:#232525'>(</span><span
style='font-size:9.0pt;color:#6A8759;background:#232525'>'config.php'</span><span
style='font-size:9.0pt;color:#A9B7C6;background:#232525'>)</span><span
style='font-size:9.0pt;color:#CC7832;background:#232525'>;<br>
<br>
<br>
</span><span style='font-size:9.0pt;color:gray;background:#232525'>//S3<br>
<br>
</span><span style='font-size:9.0pt;color:#9876AA;background:#232525'>$s3 </span><span
style='font-size:9.0pt;color:#A9B7C6;background:#232525'>= \Aws\S3\S3Client::</span><i><span
style='font-size:9.0pt;color:#FFC66D;background:#232525'>factory</span></i><span
style='font-size:9.0pt;color:#A9B7C6;background:#232525'>([<br>
<span style='mso-spacerun:yes'>   </span></span><span style='font-size:9.0pt;
color:#6A8759;background:#232525'>&quot;key&quot;<span style='mso-spacerun:yes'>        </span></span><span
style='font-size:9.0pt;color:#A9B7C6;background:#232525'>=&gt; </span><span
style='font-size:9.0pt;color:#9876AA;background:#232525'>$config</span><span
style='font-size:9.0pt;color:#A9B7C6;background:#232525'>[</span><span
style='font-size:9.0pt;color:#6A8759;background:#232525'>'s3'</span><span
style='font-size:9.0pt;color:#A9B7C6;background:#232525'>][</span><span
style='font-size:9.0pt;color:#6A8759;background:#232525'>'key'</span><span
style='font-size:9.0pt;color:#A9B7C6;background:#232525'>]</span><span
style='font-size:9.0pt;color:#CC7832;background:#232525'>,<br>
<span style='mso-spacerun:yes'>    </span></span><span style='font-size:9.0pt;
color:#6A8759;background:#232525'>&quot;secret&quot;<span style='mso-spacerun:yes'>    </span></span><span
style='font-size:9.0pt;color:#A9B7C6;background:#232525'>=&gt; </span><span
style='font-size:9.0pt;color:#9876AA;background:#232525'>$config</span><span
style='font-size:9.0pt;color:#A9B7C6;background:#232525'>[</span><span
style='font-size:9.0pt;color:#6A8759;background:#232525'>'s3'</span><span
style='font-size:9.0pt;color:#A9B7C6;background:#232525'>][</span><span
style='font-size:9.0pt;color:#6A8759;background:#232525'>'secret'</span><span
style='font-size:9.0pt;color:#A9B7C6;background:#232525'>]<br>
])</span><span style='font-size:9.0pt;color:#CC7832;background:#232525'>;<o:p></o:p></span></pre>

<p class=MsoListParagraphCxSpFirst style='margin-left:18.0pt;mso-add-space:
auto'><span style='font-size:12.0pt;line-height:115%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoListParagraphCxSpLast style='margin-left:18.0pt;mso-add-space:auto;
text-indent:-18.0pt;mso-list:l30 level1 lfo46'><![if !supportLists]><span
style='font-size:12.0pt;line-height:115%;mso-bidi-font-family:Georgia;
mso-bidi-theme-font:minor-latin'><span style='mso-list:Ignore'>5.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span></span><![endif]><span
style='font-size:12.0pt;line-height:115%'>Listado y creación de links a
archivos en Bucket:<o:p></o:p></span></p>

<pre style='margin-left:54.0pt;background:#2B2B2B'><b><span style='font-size:
9.0pt;color:#CC7832;background:#232525'>&lt;?php<br>
<br>
</span></b><span style='font-size:9.0pt;color:gray;background:#232525'>#Se agrega el archivo start que nos permite iniciar los objetos en AWS SDK <br>
</span><b><span style='font-size:9.0pt;color:#CC7832;background:#232525'>require </span></b><span
style='font-size:9.0pt;color:#6A8759;background:#232525'>'app/start.php'</span><span
style='font-size:9.0pt;color:#CC7832;background:#232525'>;<br>
<br>
</span><span style='font-size:9.0pt;color:gray;background:#232525'>#Se instancia los objetos del bucket<br>
</span><span style='font-size:9.0pt;color:#9876AA;background:#232525'>$objects </span><span
style='font-size:9.0pt;color:#A9B7C6;background:#232525'>= </span><span
style='font-size:9.0pt;color:#9876AA;background:#232525'>$s3</span><span
style='font-size:9.0pt;color:#A9B7C6;background:#232525'>-&gt;</span><span
style='font-size:9.0pt;color:#FFC66D;background:#232525'>getIterator</span><span
style='font-size:9.0pt;color:#A9B7C6;background:#232525'>(</span><span
style='font-size:9.0pt;color:#6A8759;background:#232525'>'ListObjects'</span><span
style='font-size:9.0pt;color:#CC7832;background:#232525'>, </span><span
style='font-size:9.0pt;color:#A9B7C6;background:#232525'>[<br>
<span style='mso-spacerun:yes'>        </span></span><span style='font-size:
9.0pt;color:#6A8759;background:#232525'>'Bucket' </span><span style='font-size:
9.0pt;color:#A9B7C6;background:#232525'>=&gt; </span><span style='font-size:
9.0pt;color:#9876AA;background:#232525'>$config</span><span style='font-size:
9.0pt;color:#A9B7C6;background:#232525'>[</span><span style='font-size:9.0pt;
color:#6A8759;background:#232525'>'s3'</span><span style='font-size:9.0pt;
color:#A9B7C6;background:#232525'>][</span><span style='font-size:9.0pt;
color:#6A8759;background:#232525'>'bucket'</span><span style='font-size:9.0pt;
color:#A9B7C6;background:#232525'>]<br>
<span style='mso-spacerun:yes'>    </span>])</span><span style='font-size:9.0pt;
color:#CC7832;background:#232525'>;<br>
</span><span style='font-size:9.0pt;color:gray;background:#232525'>//var_dump($objects);<br>
</span><b><span style='font-size:9.0pt;color:#CC7832;background:#232525'>?&gt;</span></b><b><span
style='font-size:9.0pt;color:#CC7832'><br>
</span></b><span style='font-size:9.0pt;color:#E8BF6A'>&lt;!DOCTYPE </span><span
style='font-size:9.0pt;color:#BABABA'>html</span><span style='font-size:9.0pt;
color:#E8BF6A'>&gt;<br>
&lt;html </span><span style='font-size:9.0pt;color:#BABABA'>lang=</span><span
style='font-size:9.0pt;color:#A5C261'>&quot;es&quot;</span><span
style='font-size:9.0pt;color:#E8BF6A'>&gt;<br>
<span style='mso-spacerun:yes'>    </span>&lt;head&gt;<br>
<span style='mso-spacerun:yes'>        </span>&lt;meta </span><span
style='font-size:9.0pt;color:#BABABA'>charset=</span><span style='font-size:
9.0pt;color:#A5C261'>&quot;utf-8&quot;</span><span style='font-size:9.0pt;
color:#E8BF6A'>&gt;<br>
<span style='mso-spacerun:yes'>        </span>&lt;title&gt;</span><span
style='font-size:9.0pt;color:#A9B7C6'>Listando</span><span style='font-size:
9.0pt;color:#E8BF6A'>&lt;/title&gt;<br>
<span style='mso-spacerun:yes'>    </span>&lt;/head&gt;<br>
<span style='mso-spacerun:yes'>    </span>&lt;body&gt;<br>
<span style='mso-spacerun:yes'>        </span>&lt;table&gt;<br>
<span style='mso-spacerun:yes'>            </span>&lt;thead&gt;<br>
<span style='mso-spacerun:yes'>                </span>&lt;tr&gt;<br>
<span style='mso-spacerun:yes'>                    </span>&lt;th&gt;</span><span
style='font-size:9.0pt;color:#A9B7C6'>File</span><span style='font-size:9.0pt;
color:#E8BF6A'>&lt;/th&gt;<br>
<span style='mso-spacerun:yes'>                    </span>&lt;th&gt;</span><span
style='font-size:9.0pt;color:#A9B7C6'>Download</span><span style='font-size:
9.0pt;color:#E8BF6A'>&lt;/th&gt;<br>
<span style='mso-spacerun:yes'>                </span>&lt;/tr&gt;<br>
<span style='mso-spacerun:yes'>            </span>&lt;/thead&gt;<br>
<span style='mso-spacerun:yes'>            </span>&lt;tbody&gt;<br>
<span style='mso-spacerun:yes'>            </span></span><span
style='font-size:9.0pt;color:gray'>&lt;!--Se ITERA sobre los objetos listados y se obtiene el nombre y la URL del objeto con disponibilidad de 1 minuto para descargar una vez solicitado esta misma --&gt;<br>
<span style='mso-spacerun:yes'>            </span></span><b><span
style='font-size:9.0pt;color:#CC7832;background:#232525'>&lt;?php foreach </span></b><span
style='font-size:9.0pt;color:#A9B7C6;background:#232525'>(</span><span
style='font-size:9.0pt;color:#9876AA;background:#232525'>$objects </span><b><span
style='font-size:9.0pt;color:#CC7832;background:#232525'>as </span></b><span
style='font-size:9.0pt;color:#9876AA;background:#232525'>$object</span><span
style='font-size:9.0pt;color:#A9B7C6;background:#232525'>):</span><b><span
style='font-size:9.0pt;color:#CC7832;background:#232525'>?&gt;</span></b><b><span
style='font-size:9.0pt;color:#CC7832'><br>
<span style='mso-spacerun:yes'>                </span></span></b><span
style='font-size:9.0pt;color:#E8BF6A'>&lt;tr&gt;<br>
<span style='mso-spacerun:yes'>                    </span>&lt;td&gt;</span><b><span
style='font-size:9.0pt;color:#CC7832;background:#232525'>&lt;?php echo </span></b><span
style='font-size:9.0pt;color:#9876AA;background:#232525'>$object</span><span
style='font-size:9.0pt;color:#A9B7C6;background:#232525'>[</span><span
style='font-size:9.0pt;color:#6A8759;background:#232525'>'Key'</span><span
style='font-size:9.0pt;color:#A9B7C6;background:#232525'>] </span><b><span
style='font-size:9.0pt;color:#CC7832;background:#232525'>?&gt;</span></b><span
style='font-size:9.0pt;color:#E8BF6A'>&lt;/td&gt;<br>
<span style='mso-spacerun:yes'>                    </span>&lt;td&gt;<br>
<span style='mso-spacerun:yes'>                        </span>&lt;a </span><span
style='font-size:9.0pt;color:#BABABA'>href=</span><span style='font-size:9.0pt;
color:#A5C261'>&quot;</span><b><span style='font-size:9.0pt;color:#CC7832;
background:#232525'>&lt;?php echo </span></b><span style='font-size:9.0pt;
color:#9876AA;background:#232525'>$s3</span><span style='font-size:9.0pt;
color:#A9B7C6;background:#232525'>-&gt;</span><span style='font-size:9.0pt;
color:#FFC66D;background:#232525'>getObjectUrl</span><span style='font-size:
9.0pt;color:#A9B7C6;background:#232525'>(</span><span style='font-size:9.0pt;
color:#9876AA;background:#232525'>$config</span><span style='font-size:9.0pt;
color:#A9B7C6;background:#232525'>[</span><span style='font-size:9.0pt;
color:#6A8759;background:#232525'>'s3'</span><span style='font-size:9.0pt;
color:#A9B7C6;background:#232525'>][</span><span style='font-size:9.0pt;
color:#6A8759;background:#232525'>'bucket'</span><span style='font-size:9.0pt;
color:#A9B7C6;background:#232525'>]</span><span style='font-size:9.0pt;
color:#CC7832;background:#232525'>, </span><span style='font-size:9.0pt;
color:#9876AA;background:#232525'>$object</span><span style='font-size:9.0pt;
color:#A9B7C6;background:#232525'>[</span><span style='font-size:9.0pt;
color:#6A8759;background:#232525'>'Key'</span><span style='font-size:9.0pt;
color:#A9B7C6;background:#232525'>]</span><span style='font-size:9.0pt;
color:#CC7832;background:#232525'>, </span><span style='font-size:9.0pt;
color:#6A8759;background:#232525'>'+1 minutes'</span><span style='font-size:
9.0pt;color:#A9B7C6;background:#232525'>)</span><span style='font-size:9.0pt;
color:#CC7832;background:#232525'>; <b>?&gt;</b></span><span style='font-size:
9.0pt;color:#A5C261'>&quot; </span><span style='font-size:9.0pt;color:#BABABA'>download=</span><span
style='font-size:9.0pt;color:#A5C261'>&quot;</span><b><span style='font-size:
9.0pt;color:#CC7832;background:#232525'>&lt;?php echo </span></b><span
style='font-size:9.0pt;color:#9876AA;background:#232525'>$object</span><span
style='font-size:9.0pt;color:#A9B7C6;background:#232525'>[</span><span
style='font-size:9.0pt;color:#6A8759;background:#232525'>'Key'</span><span
style='font-size:9.0pt;color:#A9B7C6;background:#232525'>] </span><b><span
style='font-size:9.0pt;color:#CC7832;background:#232525'>?&gt;</span></b><span
style='font-size:9.0pt;color:#A5C261'>&quot; </span><span style='font-size:
9.0pt;color:#BABABA'>target=</span><span style='font-size:9.0pt;color:#A5C261'>&quot;_blank&quot;</span><span
style='font-size:9.0pt;color:#E8BF6A'>&gt;</span><span style='font-size:9.0pt;
color:#A9B7C6'>Download file</span><span style='font-size:9.0pt;color:#E8BF6A'>&lt;/a&gt;<br>
<span style='mso-spacerun:yes'>                    </span>&lt;/td&gt;<br>
<span style='mso-spacerun:yes'>                </span>&lt;/tr&gt;<br>
<span style='mso-spacerun:yes'>            </span></span><b><span
style='font-size:9.0pt;color:#CC7832;background:#232525'>&lt;?php endforeach</span></b><span
style='font-size:9.0pt;color:#CC7832;background:#232525'>; <b>?&gt;</b></span><b><span
style='font-size:9.0pt;color:#CC7832'><br>
<span style='mso-spacerun:yes'>            </span></span></b><span
style='font-size:9.0pt;color:#E8BF6A'>&lt;/tbody&gt;<br>
<span style='mso-spacerun:yes'>        </span>&lt;/table&gt;<br>
<span style='mso-spacerun:yes'>    </span>&lt;/body&gt;<br>
&lt;/html&gt;</span><span style='font-size:9.0pt;color:#A9B7C6'><o:p></o:p></span></pre>

<p class=MsoListParagraph style='margin-left:18.0pt;mso-add-space:auto'><span
style='font-size:12.0pt;line-height:115%'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal><span style='font-size:12.0pt;line-height:115%'><o:p>&nbsp;</o:p></span></p>

</div>

</body>

</html>
