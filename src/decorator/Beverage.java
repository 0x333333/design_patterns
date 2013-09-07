package decorator;

public abstract class Beverage {
	
	String description;
	
	public String getDescription() {
		return description;
	}
	
	public double cost() {
		return 0;
	}
}
