<x-layout title="Home | Page">
    <x-slot name="heading">Employee Details</x-slot>
    
    <div style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; background-color: #f9f9f9;">
        <h2 style="text-align: center; margin-bottom: 20px;">Employee Detail</h2>
        <table style="width: 100%; border-collapse: collapse;">
            <tr>
                <th style="text-align: left; padding: 8px; border-bottom: 1px solid #ddd;">Name</th>
                <td style="padding: 8px; border-bottom: 1px solid #ddd;">{{ $employee['name'] }}</td>
            </tr>
            <tr>
                <th style="text-align: left; padding: 8px; border-bottom: 1px solid #ddd;">Gender</th>
                <td style="padding: 8px; border-bottom: 1px solid #ddd;">{{ $employee['gender'] }}</td>
            </tr>
            <tr>
                <th style="text-align: left; padding: 8px; border-bottom: 1px solid #ddd;">Email</th>
                <td style="padding: 8px; border-bottom: 1px solid #ddd;">{{ $employee['email'] }}</td>
            </tr>
            <tr>
                <th style="text-align: left; padding: 8px; border-bottom: 1px solid #ddd;">Date of Birth</th>
                <td style="padding: 8px; border-bottom: 1px solid #ddd;">{{ $employee['dob'] }}</td>
            </tr>
            <tr>
                <th style="text-align: left; padding: 8px; border-bottom: 1px solid #ddd;">Salary</th>
                <td style="padding: 8px; border-bottom: 1px solid #ddd;">{{ $employee['salary'] }}</td>
            </tr>
            <tr>
                <th style="text-align: left; padding: 8px; border-bottom: 1px solid #ddd;">Address</th>
                <td style="padding: 8px; border-bottom: 1px solid #ddd;">{{ $employee['address'] }}</td>
            </tr>
            <tr>
                <th style="text-align: left; padding: 8px; border-bottom: 1px solid #ddd;">Note</th>
                <td style="padding: 8px; border-bottom: 1px solid #ddd;">{{ $employee['note'] }}</td>
            </tr>
            <tr>
                <th style="text-align: left; padding: 8px; border-bottom: 1px solid #ddd;">Photo</th>
                <td style="padding: 8px; border-bottom: 1px solid #ddd;">
                    <img src="{{ $employee['photo'] }}" alt="Employee Photo" style="max-width: 100px; border-radius: 4px;">
                </td>
            </tr>
        </table>
    </div>
</x-layout>®