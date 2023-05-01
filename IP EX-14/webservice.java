package lab;
import javax.jws.WebService;
import javax.jws.WebMethod;
import javax.jws.WebParam;
import java.sql.*;
@WebService(serviceName = "ip14server")
public class Ex14 {

        @WebMethod(operationName = "getDetails")
    public String getDetails(@WebParam(name = "id") int id) {
        int i=0;
        String n="";
        int p=0;
        String d="";
        try{
            Connection c=DriverManager.getConnection("jdbc:derby://localhost:1527/product");
            Statement st=c.createStatement();
            ResultSet rs=st.executeQuery("select * from products where product_id="+id);
            while(rs.next()){
                if(rs.getInt("Pid")==id){
                    i=rs.getInt("Pid");
                    n=rs.getString("name");
                    p=rs.getInt("price");
                    d=rs.getString("description");
                    break;
                            }
                
            }
            
        }
        catch(Exception e){
            
        }
        if(s!=null && p!=0 && d!=null){
                return "Product id:"+ i +"\nProduct name:"+ n +"\nPrice:"+Integer.toString(p)+"\nDescription:"+d ;
            }
            else{
                return "no data found";
            }
    }
}