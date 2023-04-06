<%--
    Document   : newjsp
    Created on : 5 Apr, 2023, 3:40:20 PM
    Author     : Administrator
--%>

<%@page import="java.util.Comparator"%>
<%@page import="java.util.Arrays"%>
<%@page import="java.util.Collection"%>
<%@page import="java.util.ArrayList"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP Page</title>
    </head>
    <body>
        <%

            class Product implements Comparable<Product> {

                String name;
                public double price;
                String instock;

                public Product() {
                }

                public Product(String name, double price, String instock) {
                    this.name = name;
                    this.price = price;
                    this.instock = instock;
                }

                public String toString() {
                    return name + "            " + price + "          " + instock;
                }

                public int compareTo(Product o) {
                    return toString().compareTo(o.toString()); //To change body of generated methods, choose Tools | Templates.
                }

            }
            Product p[] = {
                new Product("Product 1", 10.99, "YES"),
                new Product("Product 2", 5.99, "NO"),
                new Product("Product 3", 20.50, "YES")
            };

            out.println("<br>");
            pageContext.setAttribute("obj", p);
        %>
        <h1>Before sorting</h1>
        <table border="2">
            <th>Name                        Price                          Instock</th>

            <c:forEach var="i"  items="${pageScope.obj}" begin="0" end="2">
                <tr><td>${i}</td></tr>
            </c:forEach>
        </table>
        <%
            Arrays.sort(p, new Comparator<Product>() {

                public int  compare(Product o1, Product o2) {
                    return Double.compare(o1.price,o2.price);
                }
            }
            );
            pageContext.setAttribute("obj1", p);
        %>
        <h1>After sorting</h1>
        <table border="2">
            <th>Name               Price             Instock</th>

            <c:forEach var="i"  items="${pageScope.obj1}" begin="0" end="2">
                <tr><td>${i}</td></tr>
            </c:forEach>
        </table>

    </body>
</html>

