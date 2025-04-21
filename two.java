import java.util.Scanner;
class two{
    public static void main(String[]args){
        Scanner sc= new Scanner (System.in);
        System.out.println("Enter thy name:");
        String name=sc.nextLine();
        
        System.out.println("Enter the age");
        int age=sc.nextInt();
        sc.nextLine(); 

        
        System.out.println("Enter your favorite food:");
        String food=sc.nextLine();

        System.out.println("Thy name is "+name);
        System.out.println("The age is"+age);



        System.out.println("Your Favorite food is:"+food);



     

        
        

  

    }
}