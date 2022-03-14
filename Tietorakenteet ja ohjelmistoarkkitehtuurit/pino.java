import java.util.ListIterator;
import java.util.Stack;
import java.util.Scanner;

class pino
{
    static void printStack(Stack<Integer> s)
    {
        ListIterator<Integer> lt = s.listIterator();
 
        while (lt.hasNext())
            lt.next();
 
        while (lt.hasPrevious())
            System.out.print(lt.previous() + " ");
    }

    public static void main(String[] args)
    {
        Scanner lukija = new Scanner(System.in);
        System.out.println("Anna lukuja, 0 lopettaa");
        Stack<Integer> s = new Stack<>();

        while (true) {
            int luku = Integer.valueOf(lukija.nextLine());
            
            if (luku == 0) {
                break;
            }

            s.push(luku);
        }

        s.pop();
        s.pop();

        printStack(s);

        if (!s.isEmpty() == true)
        {
            System.out.println("ryhmä ei ole tyhjä");
        } else {
            System.out.println("ryhmä on tyhjä");
        }
    }
}
