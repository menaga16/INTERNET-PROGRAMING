<%--
    Document   : projsp
    Created on : 29 Mar, 2023, 11:29:59 AM
    Author     : 21CSE075
--%>

<%@ page language="java" contentType="text/html; charset=US-ASCII"
    pageEncoding="US-ASCII"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "https://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=US-ASCII">
<title>Home Page</title>
<%@taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<%@page import="ex10pack.product"%>

<%@page import="java.util.*"%>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
       
       
    </head>
    <body>
        <%
            out.println("hello");
            product st=new product("aaa",91.11,"yes");
            product st1=new product("bbb",77,"no");
            ArrayList <product> obj=new ArrayList<product>();
            obj.add(st);
            obj.add(st1);
// for(student a:obj){
// out.println(a.name);
// }

pageContext.setAttribute("obj", obj);
        %>
        <table border="2px"><tr><th>Name</th><th>price</th><th>quantity</th></tr>
        <c:forEach items="${pageScope.obj}" var="i">
           
                <tr> <td>${i.getName()}</td>
                    <td>${i.getprice()}</td>
                    <td>${i.getstock()}</td>
                </tr>
        </c:forEach>  
        </table>
       </table>
    </body>



</html>
