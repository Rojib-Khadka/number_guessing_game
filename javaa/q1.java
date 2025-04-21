class animal{
    void eat(){
        System.out.println("It is eating ");
    
    }
    void sleep(){
        System.out.println("It is sleeping");
    }
}

class dog extends animal{
    void eat(){
        System.out.println("Dog is eating ");
    
    }}

    class cat extends animal{
        void eat(){
            System.out.println("Cat is eating ");
        
        }
    
    }

public class q1{
    public static void main(String[]args){
        animal dog1=new dog();
        animal cat1=new cat();
        dog1.eat();
        dog1.sleep();
        cat1.eat();
        cat1.sleep();

    }

}
