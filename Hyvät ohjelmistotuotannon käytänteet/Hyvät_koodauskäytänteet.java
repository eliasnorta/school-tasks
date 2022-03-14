import java.util.Scanner;

public class Matikkasovellus {
	
	public static void main (String[] args) {
		// maarittele muuttujat
		String lasku = "";
		int luku1, luku2;
		Scanner scanner = new Scanner(System.in);
		
		while (!lasku.equals("scanner")) {
			System.out.println("Valitse");
			System.out.println("y) yhteenlasku");
			System.out.println("v) vähennyslasku");
			System.out.println("k) kertolasku");
			System.out.println("j) jakolasku");
			System.out.println("p) potenssi");
			System.out.println("yk) ympyrän kehä");
			System.out.println("scanner) lopeta");
			lasku = scanner.nextLine();
		
			if (!lasku.equals("yk")) {
				System.out.println("Anna luku1");
				luku1 = Integer.parseInt(scanner.nextLine());
				System.out.println("Anna luku2");
				luku2 = Integer.parseInt(scanner.nextLine());
				
				if (lasku.equals("y")) {
					System.out.println(luku1 + luku2);
				}
				
				if (lasku.equals("v")) {
					System.out.println(luku1 - luku2);
				}
				
				if (lasku.equals("k")) {
					System.out.println(luku1 * luku2);
				}
				
				if (lasku.equals("p")) {
					System.out.println(pot(luku1, luku2));
				}
				
				if (lasku.equals("j")) {
					if (luku2 != 0) {
						System.out.println(luku1 / luku2);
					}
				
					else {
						System.out.println("Ei voi jakaa nollalla.");
					}
				}
			}
		
			else if (lasku.equals("yk")) {
				System.out.println("Anna luku");
				luku1 = Integer.parseInt(scanner.nextLine());
				System.out.println(2 * 3.14 * luku1);
			}
		}
	
	}
	
	static int pot (int luku1, int luku2){
		int c = 1, i;
		for (i = 0; i < luku2; i++) {c = c * luku1;};
		return c;
	}
}
