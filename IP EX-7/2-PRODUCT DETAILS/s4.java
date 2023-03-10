/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 *
 * @author 21CSE075
 */
public class s4 extends HttpServlet {

    /**
     * Processes requests for both HTTP
     * <code>GET</code> and
     * <code>POST</code> methods.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        PrintWriter out = response.getWriter();
      
        try {
            /* TODO output your page here. You may use following sample code. */
            out.println("<!DOCTYPE html>");
            out.println("<html>");
            out.println("<head>");
            out.println("<title>Servlet Servletprgm</title>");            
            out.println("</head>");
            out.println("<body>");
            if(request.getParameter("b1")!=null)
            {
                   response.sendRedirect("https://shop.iplanetstore.in/product/16-inch-mb-pro-m2-pro-chip-12-core-cpu-19-core-gpu-16gb-ram-512gb-ssd-space-grey");
            }
            if(request.getParameter("b2")!=null)
            {
                   response.sendRedirect("https://shop.iplanetstore.in/product/iphone-14-plus-128gb-yellow");
            }
            if(request.getParameter("b3")!=null)
            {
                  response.sendRedirect("https://shop.iplanetstore.in/product/iphone-14-pro-max-128gb-deep-purple");
            }
            if(request.getParameter("b4")!=null)
            {
                 response.sendRedirect("https://shop.iplanetstore.in/product/mac-mini-m2-chip-8-core-cpu-10-core-gpu-8gb-ram-256gb-ssd");
            }
            if(request.getParameter("b5")!=null)
            {
                 response.sendRedirect("https://shop.iplanetstore.in/product/homepod-2023-midnight");
            }
            if(request.getParameter("b6")!=null)
            {
                 response.sendRedirect("https://shop.iplanetstore.in/product/ipad-10th-gen-wifi-256-gb-silver");
            }
            if(request.getParameter("b7")!=null)
            {
               response.sendRedirect("https://shop.iplanetstore.in/product/apple-watch-se-gps-40mm-starlight-aluminium-case-with-starlight-sport-band-regular");
            }
            out.println("</body>");
            out.println("</html>");
        } finally {            
            out.close();
        }
    }

    // <editor-fold defaultstate="collapsed" desc="HttpServlet methods. Click on the + sign on the left to edit the code.">
    /**
     * Handles the HTTP
     * <code>GET</code> method.
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
     * Handles the HTTP
     * <code>POST</code> method.
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
