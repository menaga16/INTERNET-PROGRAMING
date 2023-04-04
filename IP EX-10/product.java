package ex10pack;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author 21CSE075
 */


public class product {

private String name;
private double price;
private int stock;

public product() {
}

public product(String name,double price, int stock) {
       this.name = name;
this.price = price;
this.stock = stock;
}

public String getName()
        {
return name;
}

public void setName(String name)
        {
this.name = name;
}

public double getprice()
        {
return price;
}

public void setprice(double price) {
this.price = price;
}

public int getstock() {
return stock;
}

public void setstock(int quantity) {
this.stock = stock;
}

}
