
public class Test {

	public static void main (String[] args){
	
		Robot aibo=new Robot();
		aibo.name="aibo";
		Robot asimo=new Robot();
		asimo.name="asimo";
		Robot pepper=new Robot();
		pepper.name="pepper";
	
			System.out.println(aibo.name);
			aibo.talk();
			aibo.walk();
			aibo.run();
			System.out.println(asimo.name);
			asimo.talk();
			asimo.walk();
			asimo.run();
			System.out.println(pepper.name);
			pepper.talk();
			pepper.walk();
			pepper.run();
			
	}
}
