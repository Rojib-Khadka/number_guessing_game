import java.util.Scanner;
class person{
    public static void main(String[]args){
        Scanner sc=new Scanner(System.in);
        try{
            System.out.println("Enter the age");
            int a=sc.nextInt();
            if(a<0){
                throw new IllegalArgumentException("Age cannot be negative");
            }
            System.out.println("The age is:"+ a);
            
        }
        catch(IllegalArgumentException e){
            System.out.println("Please enter the valid age");
        }
       
        finally{
            sc.close();
        }

    }
}