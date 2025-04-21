import java.util.Scanner;
class Demo{
    public static void main(String[] args) {
        int x[]=new int [5];
        Scanner r=new Scanner(System.in); 
        System.out.println("Enter the numbers:");
       
        for(int i=0;i<x.length;i++){ 
        x[i]=r.nextInt();
        
        }
        System.out.println("the output is "+x[2]);
        r.close(); 
    }

    
}