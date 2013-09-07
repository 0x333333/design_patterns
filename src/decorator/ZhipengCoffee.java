package decorator;

public class ZhipengCoffee {

	public static void main(String[] args) {
		print("Welcome to Zhipeng coffee house:");
		
		Beverage beverage = new Expresso();
		print(beverage.getDescription() + ", " + beverage.cost());
		
		Beverage beverage2 = new HouseBlend();
		beverage2 = new Mocha(beverage2);
		beverage2 = new Whip(beverage2);
		print(beverage2.getDescription() + ", " + beverage2.cost());

	}
	
	public static void print(String str) {
		System.out.println(str);
	}

}
