public class fibonacciClass {
    public static void main(String[] args) {

        int general= 10;
        int num1 = 0;
        int num2 = 1;
        int suma = 1;

        System.out.println(num1);

        for (int i=1; i < general; i++) {
            System.out.println(suma);
            suma = num1 + num2;
            num1 = num2;
            num2 = suma;
        }
    }
}