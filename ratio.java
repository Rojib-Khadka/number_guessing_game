public class ratio {
    public static void main(String[] args) {
        int likes=786;
        int dislikes=78;
   double total=ratio(likes,dislikes);
        System.out.println(total);  

   
        
    }
    public static double ratio(int likes,int dislikes){
        if(likes+dislikes==0){
            return 0;

        }
        return  (double)likes/(likes+dislikes)*100;
    }


    
}
