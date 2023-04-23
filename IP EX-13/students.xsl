<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

  <xsl:template match="/">
    <html>
      <head>
        <title>Student Grades</title>
        <style type="text/css">
          table {
            border-collapse: collapse;
            width: 500px;
          }
          th, td {
            text-align: center;
            padding: 8px;
            border-bottom: 1px solid #ddd;
          }
          tr:nth-child(even) {
            background-color: #f2f2f2;
          }
          tr.highlight {
            background-color: yellow;
          }
        </style>
      </head>
      <body>
      <center>
        <h1>Student Grades</h1>
        <table>
          <tr>
            <th>Name</th>
            <th>Grade</th>
          </tr>
          <xsl:apply-templates/>
        </table>
        </center>
      </body>
    </html>
  </xsl:template>

  <xsl:template match="student">
    <xsl:variable name="grade" select="grade"/>
    <tr>
      <xsl:if test="$grade = 'A'">
        <xsl:attribute name="class">highlight</xsl:attribute>
      </xsl:if>
      <td><xsl:value-of select="name"/></td>
      <td><xsl:value-of select="grade"/></td>
    </tr>
  </xsl:template>

</xsl:stylesheet>
