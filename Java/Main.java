
class Main {
    public static void main(String[] args) {
        System.out.println("Hola Mundo");

        UberX uberX = new UberX("AMQ123", new Account("Andres Herrera", "AND123"), "Chevrolet", "Spark");
        uberX.setPassenger(4);
        uberX.printDataCar();

        UberVan uberVan = new UberVan("MKL123", new Account("Andres Herrera", "MKL123"));
        uberVan.setPassenger(6);
        uberVan.printDataCar();
    }

    
}