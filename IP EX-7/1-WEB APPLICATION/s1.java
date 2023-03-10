/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

/**
 *
 * @author menag
 */
public class s1 extends HttpServlet {


    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        try (PrintWriter out = response.getWriter()) {
            /* TODO output your page here. You may use following sample code. */
         
          
        String n=request.getParameter("username"); 
        String m=request.getParameter("MAIL");
        out.print("<h2> SUCCESSFULLY SUBMITTED " + n + " !!!</h2>");  
          
        HttpSession session=request.getSession();  
        try {
            /* TODO output your page here. You may use following sample code. */
            out.println("<!DOCTYPE html>");
            out.println("<html>");
            out.println("<head>");
                   
            out.println("</head>");
            out.println("<body style='text-align:center; padding-top:30%; background-image:url(https://images.pexels.com/photos/370717/pexels-photo-370717.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1); background-size:100%')>");
            out.println("<br>");
            out.println("</h2>For more information kindly visit the following page:</h2>");
            session.setAttribute("uname", n);
            session.setAttribute("mail", m);
            out.println("<a href='http://localhost:8080/WebApplication1/s2'>details</a>");
            out.println("</body>");
            out.println("</html>");
        }
        finally{
            
        }
        
        
  
        }
    }

    // <editor-fold defaultstate="collapsed" desc="HttpServlet methods. Click on the + sign on the left to edit the code.">
    /**
     * Handles the HTTP <code>GET</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Handles the HTTP <code>POST</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Returns a short description of the servlet.
     *
     * @return a String containing servlet description
     */
    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
