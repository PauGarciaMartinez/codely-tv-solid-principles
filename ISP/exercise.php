// Interfaces

public interface RunningCapacity {
  void run();
}

public interface BarkingCapacity {
  void bark();
}

public interface FlyingCapacity {
  void fly();
}

// Implementation

public class Dog implements RunningCapacity, BarkingCapacity {
    @Override
    public void run() {
        System.out.print("Dog is running");
    }

    @Override
    public void bark() {
        System.out.print("Dog is barking");
    }
}

public class Bird implements FlyingCapacity {
    public void fly() {
        System.out.print("Bird is flying");
    }
}
