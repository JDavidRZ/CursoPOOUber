public class Car {
    Integer id;
    String license;
    Account driver;
    Integer passenger;

    public Car (String license, Account driver){
        this.license = license;
        this.driver = driver;
    }

    public void printDataCar(){
        System.out.println("Licence: " + license + " Name Driver: " + driver.name);
    }
}
