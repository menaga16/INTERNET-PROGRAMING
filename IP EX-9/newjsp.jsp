<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<%@ page import="java.sql.*" %>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Book Database</title>
</head>
<body>
<center>
	<h1>Book Database</h1>
	 <%  Connection c;
        Statement st;
        ResultSet rs;
        int count=0;
        double average=0;
        int max=0;
        %>
        <%
             c=DriverManager.getConnection("jdbc:derby://localhost:1527/book");
             
             st=c.createStatement();
             rs=st.executeQuery("select count(BOOK_ID) from books");
            if(rs.next()){
                count=rs.getInt(1);
            }
            rs=st.executeQuery("select avg(PRICE) from books");
            if(rs.next()){
                average=rs.getDouble(1);
            }
            rs=st.executeQuery("select max(PRICE) from books");
            if(rs.next()){
                max=rs.getInt(1);
            }
            %>
            <table border="2px"><tr><th>TOTAL NUMBER OF BOOKS AVAILABLE</th><th>AVERAGE PRICE OF TOTAL BOOKS</th><th>HIGHEST PRICED BOOK</th></tr>
                <tr><td><%= count%></td><td><%=average%></td><td><%= max%></td></tr></table>
			
	<style>
            body{
                background-color:gold;
                border-style:groove;
                left: 100px;
            }
        </style>
</center>
</body>
</html>