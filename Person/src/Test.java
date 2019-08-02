
public class Test {

	public static void main (String[] args){
	
		Person aibo=new Person();
		aibo.name="aibo";
		Person ziro=new Person();
		ziro.name="木村次郎";
		ziro.age=18;
		Person hanako=new Person();
		hanako.name="鈴木花子";
		hanako.age=16;
		Person yuki=new Person();
		yuki.name="吉田有希";
		yuki.age=26;
	
	
			System.out.println(aibo.name);
			aibo.talk();
			aibo.walk();
			aibo.run();
			System.out.println(ziro.name);
			System.out.println(ziro.age);
			System.out.println(hanako.name);
			System.out.println(hanako.age);
			System.out.println(yuki.name);
			System.out.println(yuki.age);
	}
}
