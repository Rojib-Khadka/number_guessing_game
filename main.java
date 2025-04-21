import java.io.*;
import java.util.Scanner;

public class main {
    // Method to check if a character is a prime number
    public static boolean isPrime(char ch) {
        int num = Character.getNumericValue(ch);
        if (num < 2) {
            return false;
        }
        for (int i = 2; i <= Math.sqrt(num); i++) {
            if (num % i == 0) {
                return false;
            }
        }
        return true;
    }

    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        System.out.println("Enter a character:");
        char A = sc.next().charAt(0);

        BufferedWriter writer = null;

        try {
            if (isPrime(A)) {
                writer = new BufferedWriter(new FileWriter("prime.txt"));
                writer.write("The character represents a prime number.");
            } else {
                writer = new BufferedWriter(new FileWriter("composite.txt"));
                writer.write("The character does not represent a prime number.");
            }
            System.out.println("Result written to the appropriate file.");
        } catch (IOException e) {
            System.out.println("An error occurred while writing to the file: " + e.getMessage());
        } finally {
            try {
                if (writer != null) {
                    writer.close();
                }
            } catch (IOException e) {
                System.out.println("An error occurred while closing the file writer: " + e.getMessage());
            }
        }

        sc.close();
    }
}
