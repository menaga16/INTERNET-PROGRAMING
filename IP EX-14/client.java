package client;

public class clientside {
    public static void main(String[] args) {
        System.out.println(getDetails(001));
    }

    private static String getDetails(int id) {
        lab.Ex14_Service service = new lab.Ex14_Service();
        lab.Ex14 port = service.getEx14Port();
        return port.getDetails(id);
    }
    
}
