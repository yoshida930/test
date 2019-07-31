package jp.co.internous;


import java.util.HashMap;
import java.util.Map;
public class MapSample {
	public static void main(String[] args){
	Map<String, String> map=new HashMap<String, String>();
	
    map.put("key", "value1");
    map.put("key", "value2");
    map.put("key", "value3");
    map.put("key", "value4");
	map.put("key", "value5");
	
	String value = map.get("key1");
	System.out.println(value);
	
	String valueNull = map.get("key6");
	System.out.println(valueNull);
	
	if(map.containsKey("key1")){
		System.out.println("key1は存在します");
	}else{
		System.out.println("key1は存在しません");
	}
	
	for(Map.Entry<String, String>e : map.entrySet()){
		System.out.println(e.getKey()+":"+
	e.getValue());}
	}
}

