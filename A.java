import java.util.Scanner;

class A {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);

        // Input the size of the array
        System.out.println("Enter the size of the array:");
        int n = sc.nextInt();

        // Declare and initialize the array
        int[] arr = new int[n];
        System.out.println("Enter the elements of the array:");

        // Input the array elements
        for (int i = 0; i < n; i++) {
            arr[i] = sc.nextInt();
        }

        // Variables to store results
        int sumOfOddAtEvenIndex = 0;

        System.out.println("Checking numbers at even indices:");
        for (int i = 0; i < n; i += 2) { // Loop through even indices
            if (arr[i] % 2 != 0) { // Check if the number is odd
                System.out.println("Number at index " + i + " is odd: " + arr[i]);
                sumOfOddAtEvenIndex += arr[i]; // Add to the sum
            } else {
                System.out.println("Number at index " + i + " is not odd: " + arr[i]);
            }
        }

        // Display the sum of odd integers at even indices
        System.out.println("Sum of odd integers at even indices: " + sumOfOddAtEvenIndex);
    }
}
