class Vehicle {
    double speed;

    void go() {
        System.out.println("This vehicle is moving");
    }

    void stop() {
        System.out.println("This vehicle has stopped");
    }
}

class Car extends Vehicle {
    int wheels=4;
    int doors=4;
   
}

class Bicycle extends Vehicle {
    int wheels=2;
    int peddels=4;
    
}

public class ma {
    public static void main(String[] args) {
        Car car1 = new Car();
        Bicycle bike =new Bicycle(); 
        car1.go(); 
        System.out.println(car1.speed);
        System.out.println(bike.speed);
        System.out.println(car1.doors);
        System.out.println(bike.peddels);

    }
}
