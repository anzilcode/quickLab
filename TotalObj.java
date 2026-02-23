//total number of objected created display

class Num 
{
    static int count = 0;
    Num()
    {
        count++;
    }
    public static void main(String args[]) 
    {
        Num obj1 = new Num();
        Num obj2 = new Num();
        Num obj3 = new Num();
        Num obj4 = new Num();
        System.out.println("Number of Objects Created: " + count);
    }
}
