class Car {
    constructor(license, drive) {
        this.id;
        this.license = license;
        this.driver = drive;
        this.passenger;
    }

    printDataCar = function () {
        console.log(this.driver)
        console.log(this.driver.name)
        console.log(this.driver.document)
    }
}