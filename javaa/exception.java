import java.util.Scanner;
import java.util.InputMismatchException;





   
   
    


public class exception{
  
    public static void main(String[] args) {
    Scanner sc =new Scanner(System.in);{
        try{
        
        System.out.println("Enter a whole number to divide");
        int x= sc.nextInt();
        System.out.println("Enter a whole number to divide by:");
        int y= sc.nextInt();
        int z=x/y;
        System.out.println("result: "+z);

    }
    catch(ArithmeticException e){
        System.out.println("You can't divide the number by zero");


    }
    catch(InputMismatchException i){
       System.out.println("Please enter a number");

    }
    catch(Exception e){
        System.out.println("Something went wrong");
    }
    finally{
        System.out.println("This will always print");
        sc.close();
    }
    
}


    




        
       

        


    }}

    
  
