-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 05, 2022 at 02:08 AM
-- Server version: 5.6.51-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `likeamortgage_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `additional_details`
--

CREATE TABLE `additional_details` (
  `id` int(11) NOT NULL,
  `form_id` varchar(200) NOT NULL,
  `form_status` int(11) NOT NULL,
  `bank_society_1` varchar(200) NOT NULL,
  `bank_society_2` int(200) NOT NULL,
  `bank_address_1` varchar(500) NOT NULL,
  `bank_address_2` varchar(500) NOT NULL,
  `bank_postcode_1` varchar(200) NOT NULL,
  `bank_postcode_2` varchar(200) NOT NULL,
  `bank_account_holder_1` varchar(200) NOT NULL,
  `bank_account_holder_2` varchar(200) NOT NULL,
  `bank_sortcode1_1` varchar(200) NOT NULL,
  `bank_sortcode2_1` varchar(200) NOT NULL,
  `bank_sortcode3_1` varchar(200) NOT NULL,
  `bank_sortcode1_2` varchar(200) NOT NULL,
  `bank_sortcode2_2` varchar(200) NOT NULL,
  `bank_sortcode3_2` varchar(200) NOT NULL,
  `bank_account_number_1` varchar(200) NOT NULL,
  `bank_account_number_2` varchar(200) NOT NULL,
  `bank_years_1` varchar(200) NOT NULL,
  `bank_years_2` varchar(200) NOT NULL,
  `solicitor` varchar(200) NOT NULL,
  `solicitor_address` varchar(500) NOT NULL,
  `solicitor_postcode` varchar(200) NOT NULL,
  `solicitor_name` varchar(200) NOT NULL,
  `solicitor_telephone` varchar(200) NOT NULL,
  `solicitor_email` varchar(200) NOT NULL,
  `estate_agent` varchar(200) NOT NULL,
  `estate_address` varchar(500) NOT NULL,
  `estate_postcode` varchar(200) NOT NULL,
  `estate_name` varchar(200) NOT NULL,
  `estate_telephone` varchar(200) NOT NULL,
  `estate_email` varchar(200) NOT NULL,
  `vendor_name` varchar(200) NOT NULL,
  `vendor_address` varchar(500) NOT NULL,
  `vendor_postcode` varchar(200) NOT NULL,
  `vendor_telephone` varchar(200) NOT NULL,
  `vendor_email` varchar(200) NOT NULL,
  `accountant_name_1` varchar(200) NOT NULL,
  `accountant_name_2` varchar(200) NOT NULL,
  `accountant_company_1` varchar(200) NOT NULL,
  `accountant_company_2` varchar(200) NOT NULL,
  `accountant_address_1` varchar(500) NOT NULL,
  `accountant_address_2` varchar(500) NOT NULL,
  `accountant_postcode_1` varchar(200) NOT NULL,
  `accountant_postcode_2` varchar(200) NOT NULL,
  `accountant_telephone_1` varchar(200) NOT NULL,
  `accountant_telephone_2` varchar(200) NOT NULL,
  `accountant_fax_1` varchar(200) NOT NULL,
  `accountant_fax_2` varchar(200) NOT NULL,
  `accountant_email_1` varchar(200) NOT NULL,
  `accountant_email_2` varchar(200) NOT NULL,
  `accountant_qualification_1` varchar(200) NOT NULL,
  `accountant_qualification_2` varchar(200) NOT NULL,
  `current_contract_name_1` varchar(200) NOT NULL,
  `current_contract_name_2` varchar(200) NOT NULL,
  `current_contract_start_1` varchar(200) NOT NULL,
  `current_contract_start_2` varchar(200) NOT NULL,
  `current_contract_end_1` varchar(200) NOT NULL,
  `current_contract_end_2` varchar(200) NOT NULL,
  `current_contract_basis_1` varchar(200) NOT NULL,
  `current_contract_basis_2` varchar(200) NOT NULL,
  `current_contract_rate_1` varchar(200) NOT NULL,
  `current_contract_rate_2` varchar(200) NOT NULL,
  `current_contract_days_1` varchar(200) NOT NULL,
  `current_contract_days_2` varchar(200) NOT NULL,
  `previous_contract` varchar(5000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `additional_details`
--

INSERT INTO `additional_details` (`id`, `form_id`, `form_status`, `bank_society_1`, `bank_society_2`, `bank_address_1`, `bank_address_2`, `bank_postcode_1`, `bank_postcode_2`, `bank_account_holder_1`, `bank_account_holder_2`, `bank_sortcode1_1`, `bank_sortcode2_1`, `bank_sortcode3_1`, `bank_sortcode1_2`, `bank_sortcode2_2`, `bank_sortcode3_2`, `bank_account_number_1`, `bank_account_number_2`, `bank_years_1`, `bank_years_2`, `solicitor`, `solicitor_address`, `solicitor_postcode`, `solicitor_name`, `solicitor_telephone`, `solicitor_email`, `estate_agent`, `estate_address`, `estate_postcode`, `estate_name`, `estate_telephone`, `estate_email`, `vendor_name`, `vendor_address`, `vendor_postcode`, `vendor_telephone`, `vendor_email`, `accountant_name_1`, `accountant_name_2`, `accountant_company_1`, `accountant_company_2`, `accountant_address_1`, `accountant_address_2`, `accountant_postcode_1`, `accountant_postcode_2`, `accountant_telephone_1`, `accountant_telephone_2`, `accountant_fax_1`, `accountant_fax_2`, `accountant_email_1`, `accountant_email_2`, `accountant_qualification_1`, `accountant_qualification_2`, `current_contract_name_1`, `current_contract_name_2`, `current_contract_start_1`, `current_contract_start_2`, `current_contract_end_1`, `current_contract_end_2`, `current_contract_basis_1`, `current_contract_basis_2`, `current_contract_rate_1`, `current_contract_rate_2`, `current_contract_days_1`, `current_contract_days_2`, `previous_contract`, `created_at`) VALUES
(2, '3547550203', 1, 'dgngfn', 0, 'fgnfhn', 'fhnfhmh', '3635656', '536356', 'bnfhnfh', 'fhnfhn', '11', '11', '11', '11', '11', '11', '6475674563', '4675864537', '425', '245', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '28/08/2018', '29/08/2018', '28/08/2018', '30/08/2018', '', '', '', '', '', '', '[{\"previous_contract_name_1_1\":\"gffhjjj\",\"previous_contract_name_1_2\":\"fjfhjfj\",\"previous_contract_start_1_1\":\"27/08/2018\",\"previous_contract_start_1_2\":\"29/08/2018\",\"previous_contract_end_1_1\":\"26/08/2018\",\"previous_contract_end_1_2\":\"30/08/2018\",\"previous_contract_basis_1_1\":\"Per_Hour\",\"previous_contract_basis_1_2\":\"Per_Day\",\"previous_contract_rate_1_1\":\"\",\"previous_contract_rate_1_2\":\"\",\"previous_contract_days_1_1\":\"\",\"previous_contract_days_1_2\":\"\"},{\"previous_contract_name_2_1\":\"\",\"previous_contract_name_2_2\":\"\",\"previous_contract_start_2_1\":\"23/08/2018\",\"previous_contract_start_2_2\":\"25/08/2018\",\"previous_contract_end_2_1\":\"24/08/2018\",\"previous_contract_end_2_2\":\"27/08/2018\",\"previous_contract_basis_2_1\":\"Per_Day\",\"previous_contract_basis_2_2\":\"Per_Day\",\"previous_contract_rate_2_1\":\"\",\"previous_contract_rate_2_2\":\"\",\"previous_contract_days_2_1\":\"\",\"previous_contract_days_2_2\":\"\"}]', '2018-08-02 21:08:11'),
(3, '9288921029', 0, 'rgwg', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'rdethtdeh', 'wrghght', '245445', '425245', '', '', '', '', '', '', '', '', '', '', '//', '//', '//', '//', '', '', '', '', '', '', '[{\"previous_contract_name_1_1\":\"\",\"previous_contract_name_1_2\":\"\",\"previous_contract_start_1_1\":\"27/08/2018\",\"previous_contract_start_1_2\":\"29/08/2018\",\"previous_contract_end_1_1\":\"28/08/2018\",\"previous_contract_end_1_2\":\"30/08/2018\",\"previous_contract_basis_1_1\":\"Per_Day\",\"previous_contract_basis_1_2\":\"Per_Hour\",\"previous_contract_rate_1_1\":\"3444\",\"previous_contract_rate_1_2\":\"5432\",\"previous_contract_days_1_1\":\"\",\"previous_contract_days_1_2\":\"\"},{\"previous_contract_name_2_1\":\"\",\"previous_contract_name_2_2\":\"\",\"previous_contract_start_2_1\":\"31/08/2018\",\"previous_contract_start_2_2\":\"14/08/2018\",\"previous_contract_end_2_1\":\"06/08/2018\",\"previous_contract_end_2_2\":\"29/08/2018\",\"previous_contract_basis_2_1\":\"Per_Hour\",\"previous_contract_basis_2_2\":\"Per_Day\",\"previous_contract_rate_2_1\":\"4341\",\"previous_contract_rate_2_2\":\"425245\",\"previous_contract_days_2_1\":\"\",\"previous_contract_days_2_2\":\"\"},{\"previous_contract_name_3_1\":\"\",\"previous_contract_name_3_2\":\"\",\"previous_contract_start_3_1\":\"23/08/2018\",\"previous_contract_start_3_2\":\"25/08/2018\",\"previous_contract_end_3_1\":\"28/08/2018\",\"previous_contract_end_3_2\":\"29/08/2018\",\"previous_contract_basis_3_1\":\"Per_Day\",\"previous_contract_rate_3_1\":\"\",\"previous_contract_rate_3_2\":\"\",\"previous_contract_days_3_1\":\"\",\"previous_contract_days_3_2\":\"\"}]', '2018-08-06 18:10:38'),
(4, '8609795396', 0, 'fglkfjdsk', 0, 'fgfhfh', '', 'wqf234', '', 'Kopal Tandon', '', '44', '44', '44', '', '', '', '1246789', '', '10', '', 'sdshd', 'hfghfhgh', '123', 'ghfhfhg', '55555555555', 'gbbcvb@gmail.com', 'hghgh', 'gfhh', '1234', 'dff', '2345678903', 'dg@gmail.com', 'nvnnq', 'gffgdgdg', '2564458', '777777777777', 'a@gmail.com', 'hhdhd', '', 'djsdij', '', 'fdgdfgfdg', '', '12345', '', '44444444444', '', '', '', 'a@gmail.com', '', 'ca', '', 'cvv', '', '15/07/2018', 'undefined/undefined/undefined', '15/08/2018', 'undefined/undefined/undefined', 'Per_Day', '', '500', '', '5', '', '[{\"previous_contract_name_1_1\":\"guguyu\",\"previous_contract_start_1_1\":\"09/08/2017\",\"previous_contract_start_1_2\":\"undefined/undefined/undefined\",\"previous_contract_end_1_1\":\"17/10/2017\",\"previous_contract_end_1_2\":\"undefined/undefined/undefined\",\"previous_contract_basis_1_1\":\"Per_Day\",\"previous_contract_rate_1_1\":\"250\",\"previous_contract_days_1_1\":\"5\"}]', '2018-08-20 11:37:24'),
(23, '6261893266', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '//', '//', '//', '//', '', '', '', '', '', '', '[{\"previous_contract_name_1_1\":\"\",\"previous_contract_name_1_2\":\"\",\"previous_contract_start_1_1\":\"//\",\"previous_contract_start_1_2\":\"//\",\"previous_contract_end_1_1\":\"//\",\"previous_contract_end_1_2\":\"//\",\"previous_contract_rate_1_1\":\"\",\"previous_contract_rate_1_2\":\"\",\"previous_contract_days_1_1\":\"\",\"previous_contract_days_1_2\":\"\"}]', '2022-03-04 08:40:38'),
(22, '5024515514', 0, 'Lloyds Bank', 0, '', '', '', '', 'Amit Kumar Sharma and Nidhi Kalra', '', '11', '09', '09', '', '', '', '12345678', '', '5', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Vinay Pandey', '', 'Tax Consultancy Limited', '', '', '', '', '', '', '', '', '', 'vinay.accountant@gmail.com', '', 'FCCA', '', '', '', '//', '//', '//', '//', '', '', '', '', '', '', '[{\"previous_contract_name_1_1\":\"\",\"previous_contract_name_1_2\":\"\",\"previous_contract_start_1_1\":\"//\",\"previous_contract_start_1_2\":\"//\",\"previous_contract_end_1_1\":\"//\",\"previous_contract_end_1_2\":\"//\",\"previous_contract_rate_1_1\":\"\",\"previous_contract_rate_1_2\":\"\",\"previous_contract_days_1_1\":\"\",\"previous_contract_days_1_2\":\"\"}]', '2022-02-21 11:43:39');

-- --------------------------------------------------------

--
-- Table structure for table `appendix`
--

CREATE TABLE `appendix` (
  `id` int(11) NOT NULL,
  `form_id` varchar(200) NOT NULL,
  `form_status` int(11) NOT NULL,
  `sale_price_1` varchar(200) NOT NULL,
  `sale_price_comment` varchar(200) NOT NULL,
  `deduct_outstanding_1` varchar(200) NOT NULL,
  `deduct_outstanding_comment` varchar(200) NOT NULL,
  `estate_fees_1` varchar(200) NOT NULL,
  `estate_fees_2` varchar(200) NOT NULL,
  `solicitor_fees_1` varchar(200) NOT NULL,
  `solicitor_fees_2` varchar(200) NOT NULL,
  `other_fees_1` varchar(200) NOT NULL,
  `other_fees_2` varchar(200) NOT NULL,
  `property_sale_1` varchar(200) NOT NULL,
  `property_sale_2` varchar(200) NOT NULL,
  `funds_sale_1` varchar(200) NOT NULL,
  `funds_sale_2` varchar(200) NOT NULL,
  `savings_1` varchar(200) NOT NULL,
  `savings_2` varchar(200) NOT NULL,
  `gifts_1` varchar(200) NOT NULL,
  `gifts_2` varchar(200) NOT NULL,
  `inheritance_1` varchar(200) NOT NULL,
  `inheritance_2` varchar(200) NOT NULL,
  `other_1` varchar(200) NOT NULL,
  `other_2` varchar(200) NOT NULL,
  `amount_availabe_1` varchar(200) NOT NULL,
  `amount_availabe_2` varchar(200) NOT NULL,
  `purchase_survey_1` varchar(200) NOT NULL,
  `purchase_survey_2` varchar(200) NOT NULL,
  `purchase_solicitor_1` varchar(200) NOT NULL,
  `purchase_solicitor_2` varchar(200) NOT NULL,
  `purchase_mortgage_1` varchar(200) NOT NULL,
  `purchase_mortgage_2` varchar(200) NOT NULL,
  `purchase_stamp_1` varchar(200) NOT NULL,
  `purchase_stamp_2` varchar(200) NOT NULL,
  `purchase_removal_1` varchar(200) NOT NULL,
  `purchase_removal_2` varchar(200) NOT NULL,
  `purchase_home_1` varchar(200) NOT NULL,
  `purchase_home_2` varchar(200) NOT NULL,
  `purchase_furniture_1` varchar(200) NOT NULL,
  `purchase_furniture_2` varchar(200) NOT NULL,
  `purchase_other_1` varchar(200) NOT NULL,
  `purchase_other_2` varchar(200) NOT NULL,
  `purchase_total_1` varchar(200) NOT NULL,
  `purchase_total_2` varchar(200) NOT NULL,
  `summary_available_1` varchar(200) NOT NULL,
  `summary_available_2` varchar(200) NOT NULL,
  `summary_less_1` varchar(200) NOT NULL,
  `summary_less_2` varchar(200) NOT NULL,
  `summary_grand_1` varchar(200) NOT NULL,
  `summary_grand_2` varchar(200) NOT NULL,
  `summary_price_1` varchar(200) NOT NULL,
  `summary_price_2` varchar(200) NOT NULL,
  `summary_deposit_1` varchar(200) NOT NULL,
  `summary_deposit_2` varchar(200) NOT NULL,
  `additional_observations` varchar(1000) NOT NULL,
  `adviser_name` varchar(200) NOT NULL,
  `date_completed` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appendix`
--

INSERT INTO `appendix` (`id`, `form_id`, `form_status`, `sale_price_1`, `sale_price_comment`, `deduct_outstanding_1`, `deduct_outstanding_comment`, `estate_fees_1`, `estate_fees_2`, `solicitor_fees_1`, `solicitor_fees_2`, `other_fees_1`, `other_fees_2`, `property_sale_1`, `property_sale_2`, `funds_sale_1`, `funds_sale_2`, `savings_1`, `savings_2`, `gifts_1`, `gifts_2`, `inheritance_1`, `inheritance_2`, `other_1`, `other_2`, `amount_availabe_1`, `amount_availabe_2`, `purchase_survey_1`, `purchase_survey_2`, `purchase_solicitor_1`, `purchase_solicitor_2`, `purchase_mortgage_1`, `purchase_mortgage_2`, `purchase_stamp_1`, `purchase_stamp_2`, `purchase_removal_1`, `purchase_removal_2`, `purchase_home_1`, `purchase_home_2`, `purchase_furniture_1`, `purchase_furniture_2`, `purchase_other_1`, `purchase_other_2`, `purchase_total_1`, `purchase_total_2`, `summary_available_1`, `summary_available_2`, `summary_less_1`, `summary_less_2`, `summary_grand_1`, `summary_grand_2`, `summary_price_1`, `summary_price_2`, `summary_deposit_1`, `summary_deposit_2`, `additional_observations`, `adviser_name`, `date_completed`, `created_at`) VALUES
(1, '9288921029', 1, '90', '', '6', '', '7', '', '5', '', '4', '', '68.00', '', '57', '', '57', '', '57', '', '57', '', '57', '', '285.00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '285.00', '', '', '', '285.00', '', '', '', '', '', 'begdhdnnhn', '', '', '2018-07-31 20:16:37'),
(2, '8609795396', 1, '2000000', 'dfdf', '100000', 'dsfdsf', '100000', 'fdsf', '100000', 'dsfdgf', '100000', 'fdsf', '1,600,000.00', 'dsgfsdf', '1600000.00', 'fdsgf', '50000', 'ff', '50000', '', '100000', '', '0', '', '1,800,000.00', '', '2000', '', '2000', '', '2000', '', '5000', '', '5000', '', '2000', '', '1000', '', '1000', '', '20,000.00', '', '1,800,000.00', '', '20,000.00', '', '1,780,000.00', '', '1,800,000.00', '', '20,000.00', '', 'gdgdgdgdgdgdhdfg', 'Vipul Agarwal', '2018-08-20', '2018-08-20 11:39:42'),
(20, '6261893266', 1, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-10-05 09:34:22'),
(24, '5710370287', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-02-28 10:10:25'),
(23, '5024515514', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-02-21 11:43:46');

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` int(11) NOT NULL,
  `form_id` varchar(200) NOT NULL,
  `is_saving_1` varchar(200) NOT NULL,
  `is_saving_2` varchar(200) NOT NULL,
  `fund_plan_1` varchar(200) NOT NULL,
  `fund_plan_2` varchar(200) NOT NULL,
  `bank_savings` varchar(2500) NOT NULL,
  `lower_owner_1` varchar(200) NOT NULL,
  `lower_type_1` varchar(200) NOT NULL,
  `lower_provider_1` varchar(200) NOT NULL,
  `lower_currentvalue_1` varchar(200) NOT NULL,
  `lower_monthly_1` varchar(200) NOT NULL,
  `lower_notes_1` varchar(500) NOT NULL,
  `lower_owner_2` varchar(200) NOT NULL,
  `lower_type_2` varchar(200) NOT NULL,
  `lower_provider_2` varchar(200) NOT NULL,
  `lower_amount_2` varchar(200) NOT NULL,
  `lower_monthly_2` varchar(200) NOT NULL,
  `lower_notes_2` varchar(500) NOT NULL,
  `pension` varchar(2500) NOT NULL,
  `form_status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `form_id`, `is_saving_1`, `is_saving_2`, `fund_plan_1`, `fund_plan_2`, `bank_savings`, `lower_owner_1`, `lower_type_1`, `lower_provider_1`, `lower_currentvalue_1`, `lower_monthly_1`, `lower_notes_1`, `lower_owner_2`, `lower_type_2`, `lower_provider_2`, `lower_amount_2`, `lower_monthly_2`, `lower_notes_2`, `pension`, `form_status`, `created_at`) VALUES
(2, '3594043122', 'Yes', 'Yes', 'adadad', 'adadd', '[{\"ownername_bank_1\":\"\",\"type_bank_1\":\"\",\"provider_bank_1\":\"\",\"currentvalue_bank_1\":\"10000\",\"monthly_bank_1\":\"1000\"},{\"ownername_bank_2\":\"\",\"type_bank_2\":\"\",\"provider_bank_2\":\"\",\"currentvalue_bank_2\":\"10000\",\"monthly_bank_2\":\"1000\"},{\"ownername_bank_3\":\"\",\"type_bank_3\":\"\",\"provider_bank_3\":\"\",\"currentvalue_bank_3\":\"10000\",\"monthly_bank_3\":\"1000\"},{\"ownername_bank_4\":\"\",\"type_bank_4\":\"\",\"provider_bank_4\":\"\",\"currentvalue_bank_4\":\"10000\",\"monthly_bank_4\":\"1000\"}]', '', '', '', '40,000.00', '4,000.00', '', '', '', '', '5,000.00', '3,000.00', '', '[{\"ownername_pension_1\":\"\",\"type_pension_1\":\"\",\"provider_pension_1\":\"\",\"amount_pension_1\":\"1000\",\"monthly_pension_1\":\"500\"},{\"ownername_pension_2\":\"\",\"type_pension_2\":\"\",\"provider_pension_2\":\"\",\"amount_pension_2\":\"1000\",\"monthly_pension_2\":\"500\"},{\"ownername_pension_3\":\"\",\"type_pension_3\":\"\",\"provider_pension_3\":\"\",\"amount_pension_3\":\"1000\",\"monthly_pension_3\":\"500\"},{\"ownername_pension_4\":\"\",\"type_pension_4\":\"\",\"provider_pension_4\":\"\",\"amount_pension_4\":\"1000\",\"monthly_pension_4\":\"500\"},{\"ownername_pension_5\":\"\",\"type_pension_5\":\"\",\"provider_pension_5\":\"\",\"amount_pension_5\":\"1000\",\"monthly_pension_5\":\"1000\"}]', 0, '2018-07-22 12:10:53'),
(3, '8609795396', 'Yes', '', 'dsdff', '', '[{\"ownername_bank_1\":\"xyz\",\"type_bank_1\":\"saving\",\"provider_bank_1\":\"sbi\",\"currentvalue_bank_1\":\"120000\",\"monthly_bank_1\":\"10000\"},{\"ownername_bank_2\":\"\",\"type_bank_2\":\"\",\"provider_bank_2\":\"\",\"currentvalue_bank_2\":\"\",\"monthly_bank_2\":\"\"},{\"ownername_bank_3\":\"\",\"type_bank_3\":\"\",\"provider_bank_3\":\"\",\"currentvalue_bank_3\":\"\",\"monthly_bank_3\":\"\"},{\"ownername_bank_4\":\"\",\"type_bank_4\":\"\",\"provider_bank_4\":\"\",\"currentvalue_bank_4\":\"\",\"monthly_bank_4\":\"\"}]', '', '', '', '120,000.00', '10,000.00', '', '', '', '', '1,000.00', '500.00', 'ssdfsdf', '[{\"ownername_pension_1\":\"xyz\",\"type_pension_1\":\"fixed\",\"provider_pension_1\":\"dadaad\",\"amount_pension_1\":\"1000\",\"monthly_pension_1\":\"500\"},{\"ownername_pension_2\":\"\",\"type_pension_2\":\"\",\"provider_pension_2\":\"\",\"amount_pension_2\":\"\",\"monthly_pension_2\":\"\"},{\"ownername_pension_3\":\"\",\"type_pension_3\":\"\",\"provider_pension_3\":\"\",\"amount_pension_3\":\"\",\"monthly_pension_3\":\"\"},{\"ownername_pension_4\":\"\",\"type_pension_4\":\"\",\"provider_pension_4\":\"\",\"amount_pension_4\":\"\",\"monthly_pension_4\":\"\"}]', 1, '2018-08-20 09:47:09'),
(22, '5024515514', 'Yes', 'Yes', '', '', '[{\"ownername_bank_1\":\"Joint\",\"type_bank_1\":\"Current\",\"provider_bank_1\":\"Lloyds\",\"currentvalue_bank_1\":\"12,987\",\"monthly_bank_1\":\"\"},{\"ownername_bank_2\":\"\",\"type_bank_2\":\"\",\"provider_bank_2\":\"\",\"currentvalue_bank_2\":\"\",\"monthly_bank_2\":\"\"},{\"ownername_bank_3\":\"\",\"type_bank_3\":\"\",\"provider_bank_3\":\"\",\"currentvalue_bank_3\":\"\",\"monthly_bank_3\":\"\"},{\"ownername_bank_4\":\"\",\"type_bank_4\":\"\",\"provider_bank_4\":\"\",\"currentvalue_bank_4\":\"\",\"monthly_bank_4\":\"\"}]', '', '', '', '12,987.00', '', '', '', '', '', '', '', '', '[{\"ownername_pension_1\":\"\",\"type_pension_1\":\"\",\"provider_pension_1\":\"\",\"amount_pension_1\":\"\",\"monthly_pension_1\":\"\"},{\"ownername_pension_2\":\"\",\"type_pension_2\":\"\",\"provider_pension_2\":\"\",\"amount_pension_2\":\"\",\"monthly_pension_2\":\"\"},{\"ownername_pension_3\":\"\",\"type_pension_3\":\"\",\"provider_pension_3\":\"\",\"amount_pension_3\":\"\",\"monthly_pension_3\":\"\"},{\"ownername_pension_4\":\"\",\"type_pension_4\":\"\",\"provider_pension_4\":\"\",\"amount_pension_4\":\"\",\"monthly_pension_4\":\"\"}]', 1, '2022-02-21 11:38:14');

-- --------------------------------------------------------

--
-- Table structure for table `credit_history`
--

CREATE TABLE `credit_history` (
  `id` int(11) NOT NULL,
  `form_id` varchar(200) NOT NULL,
  `credit_loan_1` varchar(200) NOT NULL,
  `credit_loan_2` varchar(200) NOT NULL,
  `credit_bankrupt_1` varchar(200) NOT NULL,
  `credit_bankrupt_2` varchar(200) NOT NULL,
  `credit_failed_1` varchar(200) NOT NULL,
  `credit_failed_2` varchar(200) NOT NULL,
  `credit_property_1` varchar(200) NOT NULL,
  `credit_property_2` varchar(200) NOT NULL,
  `credit_refused_1` varchar(200) NOT NULL,
  `credit_refused_2` varchar(200) NOT NULL,
  `credit_pending_1` varchar(200) NOT NULL,
  `credit_pending_2` varchar(200) NOT NULL,
  `credit_payday_1` varchar(200) NOT NULL,
  `credit_payday_2` varchar(200) NOT NULL,
  `credit_plan_1` varchar(200) NOT NULL,
  `credit_plan_2` varchar(200) NOT NULL,
  `county` varchar(2500) NOT NULL,
  `bankruptcy` varchar(2500) NOT NULL,
  `arrears` varchar(2500) NOT NULL,
  `repossessions` varchar(2500) NOT NULL,
  `client_additionalnotes` varchar(1000) NOT NULL,
  `form_status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credit_history`
--

INSERT INTO `credit_history` (`id`, `form_id`, `credit_loan_1`, `credit_loan_2`, `credit_bankrupt_1`, `credit_bankrupt_2`, `credit_failed_1`, `credit_failed_2`, `credit_property_1`, `credit_property_2`, `credit_refused_1`, `credit_refused_2`, `credit_pending_1`, `credit_pending_2`, `credit_payday_1`, `credit_payday_2`, `credit_plan_1`, `credit_plan_2`, `county`, `bankruptcy`, `arrears`, `repossessions`, `client_additionalnotes`, `form_status`, `created_at`) VALUES
(4, '3594043122', 'Yes', '', '', 'No', 'Yes', 'No', '', 'No', 'Yes', 'No', 'Yes', 'No', 'No', '', 'Yes', '', '[{\"company_county_1\":\"Deepshikha Apartment\",\"company_county_2\":\"khvfjhjk\",\"company_amount_1\":\"123\",\"company_amount_2\":\"1213\",\"company_client_1\":\"Joint,\",\"company_client_2\":\"Joint,\",\"county_regdate_1\":\"11/07/2018\",\"county_regdate_2\":\"13/07/2018\",\"county_repaid_1\":\"Yes\",\"county_repaid_2\":\"Yes\",\"county_settle_1\":\"No\",\"county_settle_2\":\"No\",\"county_setdate_1\":\"09/07/2018\",\"county_setdate_2\":\"11/07/2018\",\"county_category_1\":\"CCJ\",\"county_category_2\":\"Default\"}]', '[{\"bank_ccjamount_1\":\"1234\",\"bank_ccjamount_2\":\"4321\",\"bank_ccjclient_1\":\"Joint,\",\"bank_ccjclient_2\":\"client_1,\",\"bank_date_1\":\"10/07/2018\",\"bank_date_2\":\"11/07/2018\",\"bank_disdate_1\":\"25/07/2018\",\"bank_disdate_2\":\"27/07/2018\",\"bank_indclient_1\":\"Joint,\",\"bank_indclient_2\":\"Joint,\",\"bank_indregdate_1\":\"17/07/2018\",\"bank_indregdate_2\":\"11/07/2018\",\"bank_indamount_1\":\"1234\",\"bank_indamount_2\":\"4231\",\"bank_indsdate_1\":\"18/07/2018\",\"bank_indsdate_2\":\"19/07/2018\"}]', '[{\"arrear_company_1\":\"fvfvfgv\",\"arrear_company_2\":\"ffbvf\",\"arrear_amount_1\":\"\",\"arrear_amount_2\":\"\",\"arrear_client_1\":\"Joint,\",\"arrear_client_2\":\"client_1,\",\"arrear_missedpay_1\":\"1\",\"arrear_missedpay_2\":\"2\",\"arrear_misseddate_1\":\"18/07/2018\",\"arrear_misseddate_2\":\"19/07/2018\",\"arrear_settle_1\":\"Yes\",\"arrear_settle_2\":\"Yes\",\"arrear_dsat_1\":\"10/07/2018\",\"arrear_dsat_2\":\"01/07/2018\"}]', '{\"reposses_client_1\":\"Joint,\",\"reposses_client_2\":\"client_1,\",\"reposses_regdate_1\":\"03/07/2018\",\"reposses_regdate_2\":\"05/07/2018\",\"reposses_amount_1\":\"2344\",\"reposses_amount_2\":\"343\",\"reposses_dsat_1\":\"04/07/2018\",\"reposses_dsat_2\":\"01/07/2018\"}', 'ghkj', 1, '2018-07-23 08:26:16'),
(5, '9288921029', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '[{\"company_county_1\":\"\",\"company_county_2\":\"\",\"company_amount_1\":\"\",\"company_amount_2\":\"\",\"company_client_1\":\"\",\"company_client_2\":\"\",\"county_regdate_1\":\"//\",\"county_regdate_2\":\"//\",\"county_setdate_1\":\"//\",\"county_setdate_2\":\"//\"}]', '[{\"bank_ccjamount_1\":\"fgfsh\",\"bank_ccjamount_2\":\"fhfsh\",\"bank_ccjclient_1\":\"client_1,\",\"bank_ccjclient_2\":\"client_1,\",\"bank_date_1\":\"//\",\"bank_date_2\":\"//\",\"bank_disdate_1\":\"//\",\"bank_disdate_2\":\"//\",\"bank_indclient_1\":\"Joint,\",\"bank_indclient_2\":\"client_1,\",\"bank_indregdate_1\":\"//\",\"bank_indregdate_2\":\"//\",\"bank_indamount_1\":\"3455\",\"bank_indamount_2\":\"46353\",\"bank_indsdate_1\":\"//\",\"bank_indsdate_2\":\"//\"},{\"bank_ccjamount_3\":\"356356\",\"bank_ccjamount_4\":\"536356\",\"bank_ccjclient_3\":\"client_1,\",\"bank_ccjclient_4\":\"Joint,\",\"bank_date_3\":\"//\",\"bank_date_4\":\"//\",\"bank_disdate_3\":\"//\",\"bank_disdate_4\":\"//\",\"bank_indclient_3\":\"Joint,client_2,\",\"bank_indclient_4\":\"client_1,client_2,\",\"bank_indregdate_3\":\"08/08/2018\",\"bank_indregdate_4\":\"23/08/2018\",\"bank_indamount_3\":\"536356\",\"bank_indamount_4\":\"53653\",\"bank_indsdate_3\":\"//\",\"bank_indsdate_4\":\"//\"}]', '[{\"arrear_company_1\":\"fhjfhmj\",\"arrear_company_2\":\"dgjhdfj\",\"arrear_amount_1\":\"\",\"arrear_amount_2\":\"\",\"arrear_client_1\":\"client_1,\",\"arrear_client_2\":\"client_1,\",\"arrear_missedpay_1\":\"\",\"arrear_missedpay_2\":\"\",\"arrear_misseddate_1\":\"//\",\"arrear_misseddate_2\":\"//\",\"arrear_dsat_1\":\"//\",\"arrear_dsat_2\":\"//\"},{\"arrear_company_3\":\"\",\"arrear_company_4\":\"\",\"arrear_amount_3\":\"7585\",\"arrear_amount_4\":\"\",\"arrear_client_3\":\"Joint,\",\"arrear_client_4\":\"client_2,\",\"arrear_missedpay_3\":\"\",\"arrear_missedpay_4\":\"\",\"arrear_misseddate_3\":\"//\",\"arrear_misseddate_4\":\"//\",\"arrear_dsat_3\":\"//\",\"arrear_dsat_4\":\"//\"}]', '{\"reposses_client_1\":\"\",\"reposses_client_2\":\"\",\"reposses_regdate_1\":\"//\",\"reposses_regdate_2\":\"//\",\"reposses_amount_1\":\"\",\"reposses_amount_2\":\"\",\"reposses_dsat_1\":\"//\",\"reposses_dsat_2\":\"//\"}', '', 1, '2018-08-18 09:13:46'),
(6, '8609795396', 'Yes', '', 'Yes', '', 'Yes', '', 'Yes', '', 'Yes', '', 'Yes', '', 'Yes', '', 'Yes', '', '[{\"company_county_1\":\"rtytu\",\"company_county_2\":\"\",\"company_amount_1\":\"1000\",\"company_amount_2\":\"\",\"company_client_1\":\"client_1,\",\"company_client_2\":\"\",\"county_regdate_1\":\"06/08/2018\",\"county_regdate_2\":\"//\",\"county_repaid_1\":\"Yes\",\"county_settle_1\":\"Yes\",\"county_setdate_1\":\"28/08/2018\",\"county_setdate_2\":\"//\",\"county_category_1\":\"CCJ\"},{\"company_county_3\":\"01010\",\"company_county_4\":\"\",\"company_amount_3\":\"1000\",\"company_amount_4\":\"\",\"company_client_3\":\"client_1,\",\"company_client_4\":\"\",\"county_regdate_3\":\"07/08/2018\",\"county_regdate_4\":\"//\",\"county_repaid_3\":\"Yes\",\"county_settle_3\":\"Yes\",\"county_setdate_3\":\"22/08/2018\",\"county_setdate_4\":\"//\"}]', '[{\"bank_ccjamount_1\":\"1000\",\"bank_ccjamount_2\":\"\",\"bank_ccjclient_1\":\"client_1,\",\"bank_ccjclient_2\":\"\",\"bank_date_1\":\"06/08/2018\",\"bank_date_2\":\"//\",\"bank_disdate_1\":\"21/08/2018\",\"bank_disdate_2\":\"//\",\"bank_indclient_1\":\"client_1,\",\"bank_indclient_2\":\"\",\"bank_indregdate_1\":\"15/08/2018\",\"bank_indregdate_2\":\"//\",\"bank_indamount_1\":\"1000\",\"bank_indamount_2\":\"\",\"bank_indsdate_1\":\"30/08/2018\",\"bank_indsdate_2\":\"//\"}]', '[{\"arrear_company_1\":\"gfdgfg\",\"arrear_company_2\":\"\",\"arrear_amount_1\":\"1000\",\"arrear_amount_2\":\"\",\"arrear_client_1\":\"client_1,\",\"arrear_client_2\":\"\",\"arrear_missedpay_1\":\"10144\",\"arrear_missedpay_2\":\"\",\"arrear_misseddate_1\":\"07/08/2018\",\"arrear_misseddate_2\":\"//\",\"arrear_dsat_1\":\"07/08/2018\",\"arrear_dsat_2\":\"//\"}]', '{\"reposses_client_1\":\"client_1,\",\"reposses_client_2\":\"\",\"reposses_regdate_1\":\"14/08/2018\",\"reposses_regdate_2\":\"//\",\"reposses_amount_1\":\"4100\",\"reposses_amount_2\":\"\",\"reposses_dsat_1\":\"20/08/2018\",\"reposses_dsat_2\":\"//\"}', 'ddgdfg', 1, '2018-08-20 11:26:49'),
(24, '5024515514', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '[{\"company_county_1\":\"\",\"company_county_2\":\"\",\"company_amount_1\":\"\",\"company_amount_2\":\"\",\"company_client_1\":\"\",\"company_client_2\":\"\",\"county_regdate_1\":\"//\",\"county_regdate_2\":\"//\",\"county_setdate_1\":\"//\",\"county_setdate_2\":\"//\"}]', '[{\"bank_ccjamount_1\":\"\",\"bank_ccjamount_2\":\"\",\"bank_ccjclient_1\":\"\",\"bank_ccjclient_2\":\"\",\"bank_date_1\":\"//\",\"bank_date_2\":\"//\",\"bank_disdate_1\":\"//\",\"bank_disdate_2\":\"//\",\"bank_indclient_1\":\"\",\"bank_indclient_2\":\"\",\"bank_indregdate_1\":\"//\",\"bank_indregdate_2\":\"//\",\"bank_indamount_1\":\"\",\"bank_indamount_2\":\"\",\"bank_indsdate_1\":\"//\",\"bank_indsdate_2\":\"//\"}]', '[{\"arrear_company_1\":\"\",\"arrear_company_2\":\"\",\"arrear_amount_1\":\"\",\"arrear_amount_2\":\"\",\"arrear_client_1\":\"\",\"arrear_client_2\":\"\",\"arrear_missedpay_1\":\"\",\"arrear_missedpay_2\":\"\",\"arrear_misseddate_1\":\"//\",\"arrear_misseddate_2\":\"//\",\"arrear_dsat_1\":\"//\",\"arrear_dsat_2\":\"//\"}]', '{\"reposses_client_1\":\"\",\"reposses_client_2\":\"\",\"reposses_regdate_1\":\"//\",\"reposses_regdate_2\":\"//\",\"reposses_amount_1\":\"\",\"reposses_amount_2\":\"\",\"reposses_dsat_1\":\"//\",\"reposses_dsat_2\":\"//\"}', '', 0, '2022-02-21 11:39:36');

-- --------------------------------------------------------

--
-- Table structure for table `declaration`
--

CREATE TABLE `declaration` (
  `id` int(11) NOT NULL,
  `form_id` varchar(200) NOT NULL,
  `date_1` varchar(200) NOT NULL,
  `date_2` varchar(200) NOT NULL,
  `date_3` varchar(200) NOT NULL,
  `date_4` varchar(200) NOT NULL,
  `date_5` varchar(200) NOT NULL,
  `date_6` varchar(200) NOT NULL,
  `form_status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `declaration`
--

INSERT INTO `declaration` (`id`, `form_id`, `date_1`, `date_2`, `date_3`, `date_4`, `date_5`, `date_6`, `form_status`, `created_at`) VALUES
(1, '5402867384', '//', '//', '//', '//', '//', '//', 0, '2018-11-09 15:53:18'),
(2, '9889756743', '//', '//', '//', '//', '//', '//', 1, '2018-11-15 16:43:07'),
(3, '5632644986', '13/12/2018', '13/12/2018', '//', '//', '13/12/2018', '13/12/2018', 1, '2018-12-08 16:31:23'),
(4, '9136881066', '30/04/2019', '30/04/2019', '//', '//', '30/04/2019', '30/04/2019', 1, '2019-02-18 17:19:24'),
(5, '8207177192', '03/06/2019', '//', '//', '//', '03/06/2019', '//', 1, '2019-06-02 18:57:58'),
(6, '2955514122', '18/06/2019', '//', '//', '//', '18/06/2019', '//', 1, '2019-06-13 18:30:42'),
(7, '7439689706', '26/07/2019', '26/07/2019', '//', '//', '26/07/2019', '26/07/2019', 0, '2019-07-26 16:03:27'),
(8, '8697045147', '11/08/2019', '11/08/2019', '//', '//', '11/08/2019', '11/08/2019', 1, '2019-07-30 16:42:49'),
(9, '1458258521', '05/09/2019', '05/09/2019', '//', '//', '05/09/2019', '05/09/2019', 0, '2019-09-05 17:18:30'),
(10, '4243838046', '//', '//', '//', '//', '//', '//', 0, '2019-09-21 18:06:26'),
(11, '4189711680', '05/10/2019', '05/10/2019', '//', '//', '05/10/2019', '05/10/2019', 1, '2019-10-05 16:59:49'),
(12, '1657468461', '09/10/2019', '09/10/2019', '//', '//', '09/10/2019', '09/10/2019', 0, '2019-10-09 18:08:55'),
(13, '8736958619', '//', '//', '//', '//', '//', '//', 0, '2020-08-17 11:59:35'),
(14, '4642474026', '//', '//', '//', '//', '//', '//', 0, '2020-08-17 13:11:51'),
(15, '6261893266', '//', '//', '//', '//', '//', '//', 1, '2020-10-05 09:34:19'),
(16, '5024515514', '//', '//', '//', '//', '//', '//', 0, '2022-02-21 11:43:42');

-- --------------------------------------------------------

--
-- Table structure for table `employment_detail`
--

CREATE TABLE `employment_detail` (
  `id` int(11) NOT NULL,
  `form_id` varchar(200) NOT NULL,
  `client_employmentstatus_1_1` varchar(200) NOT NULL,
  `client_employmentstatus_1_2` varchar(200) NOT NULL,
  `client_insurancenumber_1` varchar(200) NOT NULL,
  `client_insurancenumber_2` varchar(200) NOT NULL,
  `client_currentemp_1` varchar(200) NOT NULL,
  `client_currentemp_2` varchar(200) NOT NULL,
  `client_employmentbasis_2_1` varchar(200) NOT NULL,
  `client_parttimehours_2_1` varchar(200) NOT NULL,
  `client_employmentbasis_2_2` varchar(200) NOT NULL,
  `client_parttimehours_2_2` varchar(200) NOT NULL,
  `client_employeraddress_1` varchar(200) NOT NULL,
  `client_employeraddress_2` varchar(200) NOT NULL,
  `client_emppostcode_1` varchar(200) NOT NULL,
  `client_emppostcode_2` varchar(200) NOT NULL,
  `client_tel_1` varchar(200) NOT NULL,
  `client_tel_2` varchar(200) NOT NULL,
  `client_empcontactname_1` varchar(200) NOT NULL,
  `client_empcontactname_2` varchar(200) NOT NULL,
  `client_occ_1` varchar(200) NOT NULL,
  `client_occ_2` varchar(200) NOT NULL,
  `client_startdate_1` varchar(200) NOT NULL,
  `client_startdate_2` varchar(200) NOT NULL,
  `client_enddate_1` varchar(200) NOT NULL,
  `client_enddate_2` varchar(200) NOT NULL,
  `client_probation_2_1` varchar(200) NOT NULL,
  `client_probation_2_2` varchar(200) NOT NULL,
  `client_probenddate_1` varchar(200) NOT NULL,
  `client_probenddate_2` varchar(200) NOT NULL,
  `client_occupation_2_1` varchar(200) NOT NULL,
  `client_occupation_2_2` varchar(200) NOT NULL,
  `client_prevocc_1` varchar(200) NOT NULL,
  `client_prevocc_2` varchar(200) NOT NULL,
  `client_prevemp_1` varchar(200) NOT NULL,
  `client_prevemp_2` varchar(200) NOT NULL,
  `client_prevstartdate_1` varchar(200) NOT NULL,
  `client_prevstartdate_2` varchar(200) NOT NULL,
  `client_prevenddate_1` varchar(200) NOT NULL,
  `client_prevenddate_2` varchar(200) NOT NULL,
  `client_basicsalary_1` varchar(200) NOT NULL,
  `client_basicsalary_2` varchar(200) NOT NULL,
  `client_carallow_1` varchar(200) NOT NULL,
  `client_carallow_2` varchar(200) NOT NULL,
  `client_guaranteedbonus_1` varchar(200) NOT NULL,
  `client_guaranteedbonus_2` varchar(200) NOT NULL,
  `client_guaranteedovertime_1` varchar(200) NOT NULL,
  `client_guaranteedovertime_2` varchar(200) NOT NULL,
  `client_guarshiftallow_1` varchar(200) NOT NULL,
  `client_guarshiftallow_2` varchar(200) NOT NULL,
  `client_regionalweight_1` varchar(200) NOT NULL,
  `client_regionalweight_2` varchar(200) NOT NULL,
  `client_other1_1` varchar(200) NOT NULL,
  `client_other1_2` varchar(200) NOT NULL,
  `client_commission_1` varchar(200) NOT NULL,
  `client_commission_2` varchar(200) NOT NULL,
  `client_overtime_1` varchar(200) NOT NULL,
  `client_overtime_2` varchar(200) NOT NULL,
  `client_shiftallowance_1` varchar(200) NOT NULL,
  `client_shiftallowance_2` varchar(200) NOT NULL,
  `client_other2_1` varchar(200) NOT NULL,
  `client_other2_2` varchar(200) NOT NULL,
  `client_otherincome_1` varchar(200) NOT NULL,
  `client_otherincome_2` varchar(200) NOT NULL,
  `client_totalincome_1` varchar(200) NOT NULL,
  `client_totalincome_2` varchar(200) NOT NULL,
  `client_pension_1` varchar(200) NOT NULL,
  `client_pension_2` varchar(200) NOT NULL,
  `client_childvoucher_1` varchar(200) NOT NULL,
  `client_childvoucher_2` varchar(200) NOT NULL,
  `client_studentloan_1` varchar(200) NOT NULL,
  `client_studentloan_2` varchar(200) NOT NULL,
  `client_other3_1` varchar(200) NOT NULL,
  `client_other3_2` varchar(200) NOT NULL,
  `client_totaldeduction_1` varchar(200) NOT NULL,
  `client_totaldeduction_2` varchar(200) NOT NULL,
  `client_totalempnetpay_1` varchar(200) NOT NULL,
  `client_totalempnetpay_2` varchar(200) NOT NULL,
  `client_circumstances_6_1` varchar(200) NOT NULL,
  `client_circumstances_6_2` varchar(200) NOT NULL,
  `client_additionalnotes` varchar(1000) NOT NULL,
  `form_status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employment_detail`
--

INSERT INTO `employment_detail` (`id`, `form_id`, `client_employmentstatus_1_1`, `client_employmentstatus_1_2`, `client_insurancenumber_1`, `client_insurancenumber_2`, `client_currentemp_1`, `client_currentemp_2`, `client_employmentbasis_2_1`, `client_parttimehours_2_1`, `client_employmentbasis_2_2`, `client_parttimehours_2_2`, `client_employeraddress_1`, `client_employeraddress_2`, `client_emppostcode_1`, `client_emppostcode_2`, `client_tel_1`, `client_tel_2`, `client_empcontactname_1`, `client_empcontactname_2`, `client_occ_1`, `client_occ_2`, `client_startdate_1`, `client_startdate_2`, `client_enddate_1`, `client_enddate_2`, `client_probation_2_1`, `client_probation_2_2`, `client_probenddate_1`, `client_probenddate_2`, `client_occupation_2_1`, `client_occupation_2_2`, `client_prevocc_1`, `client_prevocc_2`, `client_prevemp_1`, `client_prevemp_2`, `client_prevstartdate_1`, `client_prevstartdate_2`, `client_prevenddate_1`, `client_prevenddate_2`, `client_basicsalary_1`, `client_basicsalary_2`, `client_carallow_1`, `client_carallow_2`, `client_guaranteedbonus_1`, `client_guaranteedbonus_2`, `client_guaranteedovertime_1`, `client_guaranteedovertime_2`, `client_guarshiftallow_1`, `client_guarshiftallow_2`, `client_regionalweight_1`, `client_regionalweight_2`, `client_other1_1`, `client_other1_2`, `client_commission_1`, `client_commission_2`, `client_overtime_1`, `client_overtime_2`, `client_shiftallowance_1`, `client_shiftallowance_2`, `client_other2_1`, `client_other2_2`, `client_otherincome_1`, `client_otherincome_2`, `client_totalincome_1`, `client_totalincome_2`, `client_pension_1`, `client_pension_2`, `client_childvoucher_1`, `client_childvoucher_2`, `client_studentloan_1`, `client_studentloan_2`, `client_other3_1`, `client_other3_2`, `client_totaldeduction_1`, `client_totaldeduction_2`, `client_totalempnetpay_1`, `client_totalempnetpay_2`, `client_circumstances_6_1`, `client_circumstances_6_2`, `client_additionalnotes`, `form_status`, `created_at`) VALUES
(3, '3594043122', 'Employed', 'Employed', '123654', '123654', 'Xyz', 'Abc', 'Full Time', '', 'Full Time', '', 'sdsddd', 'dsdff', 'QQ234', '123456', '44444444444', '44444444444', 'DFER', 'EERW', 'Designer', 'Engineer', '01/07/2010', '01/07/2010', '//', '//', 'No', 'No', '//', '//', 'No', 'No', '', '', '', '', '', '', '', '', '10000', '20000', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '500', '1500', '0', '0', '0', '0', '0', '0', '500', '500', '11,000.00', '22,000.00', '1000', '1000', '0', '0', '0', '0', '0', '0', '0', '1,000.00', '1250', '1250', 'No', 'No', '', 0, '2018-07-22 11:28:37'),
(4, '9288921029', 'Employed', 'Employed', '1233', '1233', 'dgbgb', '', 'Full Time', '', 'Full Time', '', 'ghbghgtbetg', 'egbgbgb', 'gbgeb', '45425g', '', '', '', '', '', '', '14/07/2008', '11/07/2018', '//', '//', '', '', '//', '//', '', '', '', '', '', '', '', '', '', '', '1234', '', '1233', '', '', '', '', '', '', '', '', '', '', '12222', '', '122', '', '', '', '', '', '1233', '', '', '2,467.00', '13,577.00', '123', '3423', '123', '34', '33434', '343', '23', '23', '33,703.00', '3,823.00', '1234', '1234', 'Yes', 'Yes', '', 1, '2018-07-23 16:14:34'),
(5, '9640022942', 'Employed,Self-Employed', 'Employed,Self-Employed', '', '', 'fyhfhnfn', 'ffhnf', 'Full Time', '', 'Full Time', '', 'dggfhnn', 'fhfhnnf', '545566', '456565', '53653653653', '35653665555', 'fnfhnfhn', 'fhnfhn', '', '', '01/08/2018', '23/08/2018', '17/08/2018', '18/08/2018', '', '', '//', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-08-19 13:32:13'),
(6, '8609795396', 'Employed', '', '123654', '', 'Xyz', '', 'Full Time', '', '', '', 'fgdfgdg', '', '123456', '', '77887777779', '', 'DFER', '', 'Designer', '', '13/07/2018', 'undefined/undefined/undefined', '//', 'undefined/undefined/undefined', 'Yes', '', '31/10/2018', 'undefined/undefined/undefined', 'No', '', '', '', '', '', '', '', '', '', '100000', '', '50000', '', '50000', '', '20000', '', '', '', '', '', '20000', '', '', '', '', '', '', '', '', '', '', '', '240,000.00', '', '1000', '', '0', '', '0', '', '0', '', '1,000.00', '', '20000', '', 'Yes', '', '', 0, '2018-08-20 09:39:26'),
(8, '9921519822', 'Employed,Self-Employed', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '//', 'undefined/undefined/undefined', '//', 'undefined/undefined/undefined', '', '', '//', 'undefined/undefined/undefined', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2018-08-25 07:20:59'),
(9, '6992747539', 'Employed', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '//', 'undefined/undefined/undefined', '//', 'undefined/undefined/undefined', '', '', '//', 'undefined/undefined/undefined', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2018-08-25 08:14:32'),
(32, '9404682413', 'Employed', 'Self-Employed', '', '', 'Company Ltd', '', 'Part time', '30', '', '', 'Emp Address Line 1', '', 'CV12UI', '', '01234567899', '', 'Paul Warren', '', 'Project Manager', '', '01/07/2010', '//', '//', '//', 'No', '', '//', '//', 'No', '', '', '', '', '', '//', '//', '//', '//', '60,000', '', '', '', '', '', '', '', '', '', '', '', '', '', '2,000', '', '', '', '500', '', '125', '', '', '', '62,625.00', '', '', '', '', '', '', '', '1,000', '', '1,000.00', '', '', '', '', '', 'Other deductions test note', 0, '2020-10-05 12:57:19'),
(34, '5024515514', 'Self-Employed', 'Employed', 'SG123456B', 'JX123456H', '', 'Sailing Boat UK Limited', '', '', 'Full Time', '', '', 'Unit 4, Corner Building, Aldermore Street, Slough', '', 'SE4 8NT', '', '', '', '', '', 'Senior Commercial Manager', '//', '03/08/2020', '//', '//', '', 'No', '//', '//', '', 'No', '', '', '', '', '//', '//', '//', '//', '', '58,000', '', '7,000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '65,000.00', '', '', '', '', '', '', '', '', '', '', '', '4,132', '', 'No', '', 1, '2022-02-21 11:25:52'),
(35, '6881902160', 'Employed', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '//', 'undefined/undefined/undefined', '//', 'undefined/undefined/undefined', '', '', '//', 'undefined/undefined/undefined', '', '', '', '', '', '', '//', 'undefined/undefined/undefined', '//', 'undefined/undefined/undefined', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2022-03-04 08:58:26'),
(36, '5256968798', 'Employed', '', '', '', '', '', 'Full Time', '', '', '', 'vasundhra enclave', '', '110096', '', '98567889411', '', 'uhj', '', 'l2', '', '04/05/2010', 'undefined/undefined/undefined', '08/04/2013', 'undefined/undefined/undefined', 'No', '', '//', 'undefined/undefined/undefined', 'No', '', '', '', '', '', '//', 'undefined/undefined/undefined', '//', 'undefined/undefined/undefined', '25,522', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '25,522.00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2022-03-04 09:54:46'),
(37, '5435559286', '', 'Employed', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '//', '//', '//', '//', '', '', '//', '//', '', '', '', '', '', '', '//', '//', '//', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2022-03-04 10:27:50'),
(38, '6539798179', 'Employed,Self-Employed,Retired,Not-Employed', '', '', '', '', '', 'Temporary', '', '', '', '', '', '', '', '', '', '', '', '', '', '//', 'undefined/undefined/undefined', '//', 'undefined/undefined/undefined', '', '', '//', 'undefined/undefined/undefined', '', '', '', '', '', '', '//', 'undefined/undefined/undefined', '//', 'undefined/undefined/undefined', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 1, '2022-03-05 07:03:06'),
(39, '9498516006', 'Self-Employed', 'Employed', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '//', '//', '//', '//', '', '', '//', '//', '', '', '', '', '', '', '//', '//', '//', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2022-03-05 07:18:35'),
(40, '2288584753', 'Employed', '', '', '', '', '', 'Part time', '', '', '', 'ytrytry', '', '110058', '', '', '', 'ertert', '', 'tretre', '', '10/03/2015', 'undefined/undefined/undefined', '01/03/2022', 'undefined/undefined/undefined', 'No', '', '//', 'undefined/undefined/undefined', 'Yes', '', '', '', '', '', '//', 'undefined/undefined/undefined', '//', 'undefined/undefined/undefined', '765', '', '765', '', '76', '', '765', '', '765', '', 'Delhi', '', '765', '', '765', '', '765', '', '567', '', '576', '', '765', '', '7,339.00', '', '765', '', '765', '', '567', '', '675', '', '2,772.00', '', '765', '', 'Yes', '', '', 0, '2022-03-05 07:25:16'),
(41, '4327360031', 'Self-Employed', 'Self-Employed', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '//', '//', '//', '//', '', '', '//', '//', '', '', '', '', '', '', '//', '//', '//', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '5676765765765765765765', 1, '2022-03-05 08:41:29'),
(42, '4866404820', 'Employed', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '//', 'undefined/undefined/undefined', '//', 'undefined/undefined/undefined', '', '', '//', 'undefined/undefined/undefined', '', '', '', '', '', '', '//', 'undefined/undefined/undefined', '//', 'undefined/undefined/undefined', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2022-03-05 08:45:14');

-- --------------------------------------------------------

--
-- Table structure for table `expenditure_budget`
--

CREATE TABLE `expenditure_budget` (
  `id` int(11) NOT NULL,
  `form_id` varchar(200) NOT NULL,
  `utility` varchar(2500) NOT NULL,
  `general_costs` varchar(3000) NOT NULL,
  `transport` varchar(3000) NOT NULL,
  `investments` varchar(2500) NOT NULL,
  `other_costs` varchar(2500) NOT NULL,
  `less_household_costs` varchar(200) NOT NULL,
  `disposable_income` varchar(200) NOT NULL,
  `budget` varchar(2500) NOT NULL,
  `client_additionalnotes` varchar(1000) NOT NULL,
  `form_status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenditure_budget`
--

INSERT INTO `expenditure_budget` (`id`, `form_id`, `utility`, `general_costs`, `transport`, `investments`, `other_costs`, `less_household_costs`, `disposable_income`, `budget`, `client_additionalnotes`, `form_status`, `created_at`) VALUES
(2, '3594043122', '{\"utility_gas_1\":\"\",\"utility_gas_2\":\"\",\"utility_gas_joint\":\"5000\",\"utility_electric_1\":\"\",\"utility_electric_2\":\"\",\"utility_electric_joint\":\"500\",\"utility_water_1\":\"\",\"utility_water_2\":\"\",\"utility_water_joint\":\"500\",\"utility_tel_1\":\"\",\"utility_tel_2\":\"\",\"utility_tel_joint\":\"1000\",\"utility_digital_1\":\"\",\"utility_digital_2\":\"\",\"utility_digital_joint\":\"500\",\"utility_tv_1\":\"\",\"utility_tv_2\":\"\",\"utility_tv_joint\":\"0\",\"utility_council_1\":\"\",\"utility_council_2\":\"\",\"utility_council_joint\":\"0\",\"utility_grouprent_1\":\"\",\"utility_grouprent_2\":\"\",\"utility_grouprent_joint\":\"500\",\"utility_service_1\":\"\",\"utility_service_2\":\"\",\"utility_service_joint\":\"1500\",\"utility_other_1\":\"\",\"utility_other_2\":\"\",\"utility_other_joint\":\"500\",\"utility_totalbill_1\":\"0.00\",\"utility_totalbill_2\":\"\",\"utility_totalbill_joint\":\"10,000.00\"}', '{\"general_food_1\":\"\",\"general_food_2\":\"\",\"general_food_joint\":\"10000\",\"general_clothing_1\":\"\",\"general_clothing_2\":\"\",\"general_clothing_joint\":\"5000\",\"general_personal_1\":\"\",\"general_personal_2\":\"\",\"general_personal_joint\":\"1000\",\"general_mobile_1\":\"\",\"general_mobile_2\":\"\",\"general_mobile_joint\":\"2000\",\"general_household_1\":\"\",\"general_household_2\":\"\",\"general_household_joint\":\"1500\",\"general_repair_1\":\"\",\"general_repair_2\":\"\",\"general_repair_joint\":\"500\",\"general_schoolfees_1\":\"\",\"general_schoolfees_2\":\"\",\"general_schoolfees_joint\":\"0\",\"general_entertainment_1\":\"\",\"general_entertainment_2\":\"\",\"general_entertainment_joint\":\"0\",\"general_alcohol_1\":\"\",\"general_alcohol_2\":\"\",\"general_alcohol_joint\":\"0\",\"general_holidays_1\":\"\",\"general_holidays_2\":\"\",\"general_holidays_joint\":\"5000\",\"general_other_1\":\"\",\"general_other_2\":\"\",\"general_other_joint\":\"5000\",\"general_totalbill_1\":\"0.00\",\"general_totalbill_2\":\"0.00\",\"general_totalbill_joint\":\"30,000.00\"}', '{\"transport_fuel_1\":\"\",\"transport_fuel_2\":\"\",\"transport_fuel_joint\":\"4000\",\"transport_roadtax_1\":\"\",\"transport_roadtax_2\":\"\",\"transport_roadtax_joint\":\"2000\",\"transport_insurance_1\":\"\",\"transport_insurance_2\":\"\",\"transport_insurance_joint\":\"4000\",\"transport_servicing_1\":\"\",\"transport_servicing_2\":\"\",\"transport_servicing_joint\":\"500\",\"transport_parking_1\":\"\",\"transport_parking_2\":\"\",\"transport_parking_joint\":\"1500\",\"transport_fare_1\":\"\",\"transport_fare_2\":\"\",\"transport_fare_joint\":\"0\",\"transport_other_1\":\"\",\"transport_other_2\":\"\",\"transport_other_joint\":\"0\",\"transport_total_1\":\"0.00\",\"transport_total_2\":\"0.00\",\"transport_total_joint\":\"12,000.00\"}', '{\"investment_private_1\":\"\",\"investment_private_2\":\"\",\"investment_private_joint\":\"1000\",\"investment_insurance_1\":\"\",\"investment_insurance_2\":\"\",\"investment_insurance_joint\":\"500\",\"investment_saving_1\":\"\",\"investment_saving_2\":\"\",\"investment_saving_joint\":\"500\",\"investment_total_1\":\"0.00\",\"investment_total_2\":\"0.00\",\"investment_total_joint\":\"2,000.00\"}', '{\"other_text1_text\":\"\",\"other_text1_1\":\"\",\"other_text1_2\":\"\",\"other_text1_joint\":\"2000\",\"other_text2_text\":\"\",\"other_text2_1\":\"\",\"other_text2_2\":\"\",\"other_text2_joint\":\"\",\"other_text3_text\":\"\",\"other_text3_1\":\"\",\"other_text3_2\":\"\",\"other_text3_joint\":\"\",\"other_total_1\":\"\",\"other_total_2\":\"\",\"other_total_joint\":\"2,000.00\"}', '', '', '{\"budget_detail_1\":\"\",\"budget_detail_2\":\"\",\"mortgage_needs\":\"\",\"protection_needs\":\"\",\"insurance_needs\":\"\",\"unemployed_needs\":\"\"}', '', 0, '2018-07-22 11:36:54'),
(3, '9288921029', '{\"utility_gas_1\":\"\",\"utility_gas_2\":\"\",\"utility_gas_joint\":\"\",\"utility_electric_1\":\"\",\"utility_electric_2\":\"\",\"utility_electric_joint\":\"\",\"utility_water_1\":\"\",\"utility_water_2\":\"\",\"utility_water_joint\":\"\",\"utility_tel_1\":\"\",\"utility_tel_2\":\"\",\"utility_tel_joint\":\"\",\"utility_digital_1\":\"\",\"utility_digital_2\":\"\",\"utility_digital_joint\":\"\",\"utility_tv_1\":\"\",\"utility_tv_2\":\"\",\"utility_tv_joint\":\"\",\"utility_council_1\":\"\",\"utility_council_2\":\"\",\"utility_council_joint\":\"\",\"utility_grouprent_1\":\"\",\"utility_grouprent_2\":\"\",\"utility_grouprent_joint\":\"\",\"utility_service_1\":\"\",\"utility_service_2\":\"\",\"utility_service_joint\":\"\",\"utility_other_1\":\"\",\"utility_other_2\":\"\",\"utility_other_joint\":\"\",\"utility_totalbill_1\":\"\",\"utility_totalbill_2\":\"\",\"utility_totalbill_joint\":\"\"}', '{\"general_food_1\":\"\",\"general_food_2\":\"\",\"general_food_joint\":\"\",\"general_clothing_1\":\"\",\"general_clothing_2\":\"\",\"general_clothing_joint\":\"\",\"general_personal_1\":\"\",\"general_personal_2\":\"\",\"general_personal_joint\":\"\",\"general_mobile_1\":\"\",\"general_mobile_2\":\"\",\"general_mobile_joint\":\"\",\"general_household_1\":\"\",\"general_household_2\":\"\",\"general_household_joint\":\"\",\"general_repair_1\":\"\",\"general_repair_2\":\"\",\"general_repair_joint\":\"\",\"general_schoolfees_1\":\"\",\"general_schoolfees_2\":\"\",\"general_schoolfees_joint\":\"\",\"general_entertainment_1\":\"\",\"general_entertainment_2\":\"\",\"general_entertainment_joint\":\"\",\"general_alcohol_1\":\"\",\"general_alcohol_2\":\"\",\"general_alcohol_joint\":\"\",\"general_holidays_1\":\"\",\"general_holidays_2\":\"\",\"general_holidays_joint\":\"\",\"general_other_1\":\"\",\"general_other_2\":\"\",\"general_other_joint\":\"\",\"general_totalbill_1\":\"\",\"general_totalbill_2\":\"\",\"general_totalbill_joint\":\"\"}', '{\"transport_fuel_1\":\"\",\"transport_fuel_2\":\"\",\"transport_fuel_joint\":\"\",\"transport_roadtax_1\":\"\",\"transport_roadtax_2\":\"\",\"transport_roadtax_joint\":\"\",\"transport_insurance_1\":\"\",\"transport_insurance_2\":\"\",\"transport_insurance_joint\":\"\",\"transport_servicing_1\":\"\",\"transport_servicing_2\":\"\",\"transport_servicing_joint\":\"\",\"transport_parking_1\":\"\",\"transport_parking_2\":\"\",\"transport_parking_joint\":\"\",\"transport_fare_1\":\"\",\"transport_fare_2\":\"\",\"transport_fare_joint\":\"\",\"transport_other_1\":\"\",\"transport_other_2\":\"\",\"transport_other_joint\":\"\",\"transport_total_1\":\"\",\"transport_total_2\":\"\",\"transport_total_joint\":\"\"}', '{\"investment_private_1\":\"\",\"investment_private_2\":\"\",\"investment_private_joint\":\"\",\"investment_insurance_1\":\"\",\"investment_insurance_2\":\"\",\"investment_insurance_joint\":\"\",\"investment_saving_1\":\"\",\"investment_saving_2\":\"\",\"investment_saving_joint\":\"\",\"investment_total_1\":\"\",\"investment_total_2\":\"\",\"investment_total_joint\":\"\"}', '{\"other_text1_text\":\"\",\"other_text1_1\":\"123\",\"other_text1_2\":\"12\",\"other_text1_joint\":\"12\",\"other_text2_text\":\"\",\"other_text2_1\":\"\",\"other_text2_2\":\"\",\"other_text2_joint\":\"\",\"other_text3_text\":\"\",\"other_text3_1\":\"\",\"other_text3_2\":\"\",\"other_text3_joint\":\"\",\"other_total_1\":\"123.00\",\"other_total_2\":\"12.00\",\"other_total_joint\":\"12.00\"}', '147', '', '{\"budget_detail_1\":\"\",\"budget_detail_2\":\"\",\"mortgage_needs\":\"\",\"protection_needs\":\"\",\"insurance_needs\":\"\",\"unemployed_needs\":\"\"}', '', 0, '2018-08-06 17:51:57'),
(4, '8609795396', '{\"utility_gas_1\":\"500\",\"utility_electric_1\":\"500\",\"utility_water_1\":\"1000\",\"utility_tel_1\":\"\",\"utility_digital_1\":\"\",\"utility_tv_1\":\"\",\"utility_council_1\":\"\",\"utility_grouprent_1\":\"\",\"utility_service_1\":\"\",\"utility_other_1\":\"\",\"utility_totalbill_1\":\"2,000.00\"}', '{\"general_food_1\":\"500 \",\"general_clothing_1\":\"1000\",\"general_personal_1\":\"\",\"general_mobile_1\":\"\",\"general_household_1\":\"\",\"general_repair_1\":\"\",\"general_schoolfees_1\":\"\",\"general_entertainment_1\":\"\",\"general_alcohol_1\":\"\",\"general_holidays_1\":\"\",\"general_other_1\":\"\",\"general_totalbill_1\":\"1,500.00\"}', '{\"transport_fuel_1\":\"500\",\"transport_roadtax_1\":\"1000\",\"transport_insurance_1\":\"\",\"transport_servicing_1\":\"\",\"transport_parking_1\":\"\",\"transport_fare_1\":\"\",\"transport_other_1\":\"\",\"transport_total_1\":\"1,500.00\"}', '{\"investment_private_1\":\"500\",\"investment_insurance_1\":\"\",\"investment_saving_1\":\"\",\"investment_total_1\":\"500.00\"}', '{\"other_text1_text\":\"yiyuikhkl\",\"other_text1_1\":\"500\",\"other_text2_text\":\"\",\"other_text2_1\":\"123\",\"other_text3_text\":\"\",\"other_text3_1\":\"\",\"other_total_1\":\"512.00\"}', '11012', '18988', '{\"budget_future_1\":\"Yes\",\"budget_detail_1\":\"ljklkjlj\",\"mortgage_needs\":\"1000\",\"protection_needs\":\"500\",\"insurance_needs\":\"500\",\"unemployed_needs\":\"1000\"}', '', 1, '2018-08-20 11:25:23'),
(6, '9921519822', '{\"utility_gas_1\":\"\",\"utility_electric_1\":\"\",\"utility_water_1\":\"\",\"utility_tel_1\":\"\",\"utility_digital_1\":\"\",\"utility_tv_1\":\"\",\"utility_council_1\":\"\",\"utility_grouprent_1\":\"\",\"utility_service_1\":\"\",\"utility_other_1\":\"\",\"utility_totalbill_1\":\"\"}', '{\"general_food_1\":\"\",\"general_clothing_1\":\"\",\"general_personal_1\":\"\",\"general_mobile_1\":\"\",\"general_household_1\":\"\",\"general_repair_1\":\"\",\"general_schoolfees_1\":\"\",\"general_entertainment_1\":\"\",\"general_alcohol_1\":\"\",\"general_holidays_1\":\"\",\"general_other_1\":\"\",\"general_totalbill_1\":\"\"}', '{\"transport_fuel_1\":\"\",\"transport_roadtax_1\":\"\",\"transport_insurance_1\":\"\",\"transport_servicing_1\":\"\",\"transport_parking_1\":\"\",\"transport_fare_1\":\"\",\"transport_other_1\":\"\",\"transport_total_1\":\"\"}', '{\"investment_private_1\":\"\",\"investment_insurance_1\":\"\",\"investment_saving_1\":\"\",\"investment_total_1\":\"\"}', '{\"other_text1_text\":\"\",\"other_text1_1\":\"\",\"other_text2_text\":\"\",\"other_text2_1\":\"\",\"other_text3_text\":\"\",\"other_text3_1\":\"\",\"other_total_1\":\"\"}', '', '', '{\"budget_detail_1\":\"\",\"mortgage_needs\":\"123\",\"protection_needs\":\"15\",\"insurance_needs\":\"\",\"unemployed_needs\":\"\"}', '', 1, '2018-08-21 04:22:09'),
(24, '5024515514', '{\"utility_gas_1\":\"\",\"utility_gas_2\":\"\",\"utility_gas_joint\":\"\",\"utility_electric_1\":\"87\",\"utility_electric_2\":\"\",\"utility_electric_joint\":\"\",\"utility_water_1\":\"34\",\"utility_water_2\":\"\",\"utility_water_joint\":\"\",\"utility_tel_1\":\"\",\"utility_tel_2\":\"12\",\"utility_tel_joint\":\"\",\"utility_digital_1\":\"\",\"utility_digital_2\":\"\",\"utility_digital_joint\":\"\",\"utility_tv_1\":\"\",\"utility_tv_2\":\"12\",\"utility_tv_joint\":\"\",\"utility_council_1\":\"\",\"utility_council_2\":\"\",\"utility_council_joint\":\"123\",\"utility_grouprent_1\":\"\",\"utility_grouprent_2\":\"\",\"utility_grouprent_joint\":\"\",\"utility_service_1\":\"\",\"utility_service_2\":\"\",\"utility_service_joint\":\"\",\"utility_other_1\":\"\",\"utility_other_2\":\"\",\"utility_other_joint\":\"\",\"utility_totalbill_1\":\"121.00\",\"utility_totalbill_2\":\"24.00\",\"utility_totalbill_joint\":\"123.00\"}', '{\"general_food_1\":\"\",\"general_food_2\":\"\",\"general_food_joint\":\"500\",\"general_clothing_1\":\"\",\"general_clothing_2\":\"\",\"general_clothing_joint\":\"\",\"general_personal_1\":\"\",\"general_personal_2\":\"\",\"general_personal_joint\":\"\",\"general_mobile_1\":\"\",\"general_mobile_2\":\"\",\"general_mobile_joint\":\"\",\"general_household_1\":\"\",\"general_household_2\":\"\",\"general_household_joint\":\"\",\"general_repair_1\":\"\",\"general_repair_2\":\"\",\"general_repair_joint\":\"\",\"general_schoolfees_1\":\"\",\"general_schoolfees_2\":\"\",\"general_schoolfees_joint\":\"\",\"general_entertainment_1\":\"\",\"general_entertainment_2\":\"\",\"general_entertainment_joint\":\"50\",\"general_alcohol_1\":\"\",\"general_alcohol_2\":\"\",\"general_alcohol_joint\":\"\",\"general_holidays_1\":\"\",\"general_holidays_2\":\"\",\"general_holidays_joint\":\"\",\"general_other_1\":\"\",\"general_other_2\":\"\",\"general_other_joint\":\"\",\"general_totalbill_1\":\"\",\"general_totalbill_2\":\"\",\"general_totalbill_joint\":\"550.00\"}', '{\"transport_fuel_1\":\"\",\"transport_fuel_2\":\"\",\"transport_fuel_joint\":\"\",\"transport_roadtax_1\":\"\",\"transport_roadtax_2\":\"\",\"transport_roadtax_joint\":\"\",\"transport_insurance_1\":\"\",\"transport_insurance_2\":\"\",\"transport_insurance_joint\":\"\",\"transport_servicing_1\":\"\",\"transport_servicing_2\":\"\",\"transport_servicing_joint\":\"\",\"transport_parking_1\":\"\",\"transport_parking_2\":\"\",\"transport_parking_joint\":\"\",\"transport_fare_1\":\"\",\"transport_fare_2\":\"\",\"transport_fare_joint\":\"\",\"transport_other_1\":\"\",\"transport_other_2\":\"\",\"transport_other_joint\":\"\",\"transport_total_1\":\"\",\"transport_total_2\":\"\",\"transport_total_joint\":\"\"}', '{\"investment_private_1\":\"\",\"investment_private_2\":\"\",\"investment_private_joint\":\"\",\"investment_insurance_1\":\"\",\"investment_insurance_2\":\"\",\"investment_insurance_joint\":\"\",\"investment_saving_1\":\"\",\"investment_saving_2\":\"\",\"investment_saving_joint\":\"\",\"investment_total_1\":\"\",\"investment_total_2\":\"\",\"investment_total_joint\":\"\"}', '{\"other_text1_text\":\"\",\"other_text1_1\":\"\",\"other_text1_2\":\"\",\"other_text1_joint\":\"\",\"other_text2_text\":\"\",\"other_text2_1\":\"\",\"other_text2_2\":\"\",\"other_text2_joint\":\"\",\"other_text3_text\":\"\",\"other_text3_1\":\"\",\"other_text3_2\":\"\",\"other_text3_joint\":\"\",\"other_total_1\":\"\",\"other_total_2\":\"\",\"other_total_joint\":\"\"}', '818.00', '', '{\"budget_future_1\":\"No\",\"budget_future_2\":\"No\",\"budget_detail_1\":\"\",\"budget_detail_2\":\"\",\"mortgage_needs\":\"\",\"protection_needs\":\"\",\"insurance_needs\":\"\",\"unemployed_needs\":\"\"}', '', 0, '2022-02-21 11:39:18');

-- --------------------------------------------------------

--
-- Table structure for table `ex_property_mortgage`
--

CREATE TABLE `ex_property_mortgage` (
  `id` int(11) NOT NULL,
  `form_id` varchar(200) NOT NULL,
  `summary_1` varchar(200) NOT NULL,
  `summary_2` varchar(200) NOT NULL,
  `res_prop` varchar(3500) NOT NULL,
  `buytolet_prop` varchar(3500) NOT NULL,
  `rentvoid_period` varchar(500) NOT NULL,
  `client_additionalnotes` varchar(1000) NOT NULL,
  `form_status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ex_property_mortgage`
--

INSERT INTO `ex_property_mortgage` (`id`, `form_id`, `summary_1`, `summary_2`, `res_prop`, `buytolet_prop`, `rentvoid_period`, `client_additionalnotes`, `form_status`, `created_at`) VALUES
(2, '3594043122', '1', '1', '[{\"res_propaddress_1\":\"gbklkl;k\",\"res_propaddress_2\":\"\",\"res_owner_1\":\"Joint,\",\"res_owner_2\":\"\",\"res_estimatedval_1\":\"500000\",\"res_estimatedval_2\":\"\",\"res_saleprice_1\":\"450000\",\"res_saleprice_2\":\"\",\"client_existingmortgage_1\":\"Yes\",\"res_lender_1\":\"ddd\",\"res_lender_2\":\"\",\"res_macctno_1\":\"123456\",\"res_macctno_2\":\"\",\"res_loanout_1\":\"5000\",\"res_loanout_2\":\"\",\"res_termremain_1\":\"dsass\",\"res_termremain_2\":\"\",\"client_existingredeem_1\":\"Yes\",\"res_currinterest_1\":\"10\",\"res_currinterest_2\":\"\",\"res_monthlymortgage_1\":\"2000\",\"res_monthlymortgage_2\":\"\",\"client_existinginteresttype_1\":\"Fixed\",\"other_interesttype_1\":\"\",\"other_interesttype_2\":\"\",\"res_rateenddate_1\":\"15/06/2021\",\"res_rateenddate_2\":\"//\",\"client_existingerc_1\":\"Yes\",\"res_erc_1\":\"500\",\"res_erc_2\":\"\",\"client_existingrepay_1\":\"Interest Only\",\"client_existingrepaymethod_1\":\"Interest Only\",\"client_existingintend_1\":\"Savings\",\"other_existingintend_1\":\"\",\"other_existingintend_2\":\"\",\"res_details_1\":\"mkmklkd\",\"res_details_2\":\"\",\"res_interestonly_1\":\"5000\",\"res_interestonly_2\":\"\",\"client_existingnew_1\":\"Yes\"}]', '[{\"buylet_propaddress_1\":\"dmkamskm\",\"buylet_propaddress_2\":\"\",\"buylet_owner_1\":\"Joint,\",\"buylet_owner_2\":\"\",\"buylet_estimatedval_1\":\"10000\",\"buylet_estimatedval_2\":\"\",\"buylet_saleprice_1\":\"10000\",\"buylet_saleprice_2\":\"\",\"client_existinglet_1\":\"Yes\",\"client_buylettenant_1\":\"Family Member\",\"buylet_tenantterm_1\":\"sdsd\",\"buylet_tenantterm_2\":\"\",\"buylet_rentalincome_1\":\"500\",\"buylet_rentalincome_2\":\"\",\"client_letsecured_1\":\"Yes\",\"buylet_lender_1\":\"dfsd\",\"buylet_lender_2\":\"\",\"buylet_mortgageaccnt_1\":\"125896\",\"buylet_mortgageaccnt_2\":\"\",\"buylet_loanout_1\":\"500\",\"buylet_loanout_2\":\"\",\"buylet_termremain_1\":\"sdsds\",\"buylet_termremain_2\":\"\",\"client_letredeem_1\":\"Yes\",\"buylet_currinterest_1\":\"10\",\"buylet_currinterest_2\":\"\",\"buylet_monthlymortgage_1\":\"1000\",\"buylet_monthlymortgage_2\":\"\",\"client_buyletinterest_1\":\"Fixed\",\"buylet_rateenddate_1\":\"22/07/2018\",\"buylet_rateenddate_2\":\"//\",\"client_leterc_1\":\"Yes\",\"buylet_erc_1\":\"500\",\"client_letrepay_1\":\"Yes\",\"client_letcurrent_1\":\"Yes\",\"client_buyletrepay_1\":\"Repayment\",\"client_buyletrepay_2\":\"Repayment\",\"client_buyletintend_1\":\"Investments\",\"buylet_detail_1\":\"dssasas\",\"buylet_detail_2\":\"\",\"buylet_interestonly_1\":\"500\",\"buylet_interestonly_2\":\"\",\"client_letnew_1\":\"Yes\"}]', 'sasaa', '', 0, '2018-07-22 11:33:59'),
(3, '9288921029', '1', '1', '[{\"res_propaddress_1\":\"ghgdehgdh\",\"res_propaddress_2\":\"dgbgdbdgb\",\"res_owner_1\":\"\",\"res_owner_2\":\"\",\"res_estimatedval_1\":\"\",\"res_estimatedval_2\":\"\",\"res_saleprice_1\":\"\",\"res_saleprice_2\":\"\",\"res_lender_1\":\"\",\"res_lender_2\":\"\",\"res_macctno_1\":\"\",\"res_macctno_2\":\"\",\"res_loanout_1\":\"\",\"res_loanout_2\":\"\",\"res_termremain_1\":\"\",\"res_termremain_2\":\"\",\"res_currinterest_1\":\"\",\"res_currinterest_2\":\"\",\"res_monthlymortgage_1\":\"\",\"res_monthlymortgage_2\":\"\",\"other_interesttype_1\":\"\",\"other_interesttype_2\":\"\",\"res_rateenddate_1\":\"//\",\"res_rateenddate_2\":\"//\",\"res_erc_1\":\"\",\"res_erc_2\":\"\",\"res_details_1\":\"\",\"res_details_2\":\"\",\"res_interestonly_1\":\"\",\"res_interestonly_2\":\"\"},{\"res_propaddress_3\":\"gbdgbg\",\"res_propaddress_4\":\"dgbgdgbdg\",\"res_owner_3\":\"\",\"res_owner_4\":\"\",\"res_estimatedval_3\":\"\",\"res_estimatedval_4\":\"\",\"res_saleprice_3\":\"\",\"res_saleprice_4\":\"\",\"res_lender_3\":\"\",\"res_lender_4\":\"\",\"res_macctno_3\":\"\",\"res_macctno_4\":\"\",\"res_loanout_3\":\"\",\"res_loanout_4\":\"\",\"res_termremain_3\":\"\",\"res_termremain_4\":\"\",\"res_currinterest_3\":\"\",\"res_currinterest_4\":\"\",\"res_monthlymortgage_3\":\"\",\"res_monthlymortgage_4\":\"\",\"other_interesttype_3\":\"\",\"other_interesttype_4\":\"\",\"res_rateenddate_3\":\"//\",\"res_rateenddate_4\":\"//\",\"res_erc_3\":\"\",\"res_erc_4\":\"\",\"res_details_3\":\"\",\"res_details_4\":\"\",\"res_interestonly_3\":\"\",\"res_interestonly_4\":\"\"}]', '[{\"buylet_propaddress_1\":\"\",\"buylet_propaddress_2\":\"\",\"buylet_owner_1\":\"\",\"buylet_owner_2\":\"\",\"buylet_estimatedval_1\":\"\",\"buylet_estimatedval_2\":\"\",\"buylet_saleprice_1\":\"\",\"buylet_saleprice_2\":\"\",\"buylet_tenantterm_1\":\"\",\"buylet_tenantterm_2\":\"\",\"buylet_rentalincome_1\":\"\",\"buylet_rentalincome_2\":\"\",\"buylet_lender_1\":\"\",\"buylet_lender_2\":\"\",\"buylet_mortgageaccnt_1\":\"\",\"buylet_mortgageaccnt_2\":\"\",\"buylet_loanout_1\":\"\",\"buylet_loanout_2\":\"\",\"buylet_termremain_1\":\"\",\"buylet_termremain_2\":\"\",\"buylet_currinterest_1\":\"\",\"buylet_currinterest_2\":\"\",\"buylet_monthlymortgage_1\":\"\",\"buylet_monthlymortgage_2\":\"\",\"buylet_rateenddate_1\":\"//\",\"buylet_rateenddate_2\":\"//\",\"buylet_erc_1\":\"\",\"buylet_erc_2\":\"<div style=\",\"client_buyletrepay_1\":\"Repayment\",\"client_buyletrepay_2\":\"Repayment\",\"buylet_detail_1\":\"\",\"buylet_detail_2\":\"\",\"buylet_interestonly_1\":\"\",\"buylet_interestonly_2\":\"\"},{\"buylet_propaddress_3\":\"hrtgh\",\"buylet_propaddress_4\":\"fgnhfjh\",\"buylet_owner_3\":\"\",\"buylet_owner_4\":\"\",\"buylet_estimatedval_3\":\"\",\"buylet_estimatedval_4\":\"\",\"buylet_saleprice_3\":\"\",\"buylet_saleprice_4\":\"\",\"buylet_tenantterm_3\":\"\",\"buylet_tenantterm_4\":\"\",\"buylet_rentalincome_3\":\"\",\"buylet_rentalincome_4\":\"\",\"buylet_lender_3\":\"\",\"buylet_lender_4\":\"\",\"buylet_mortgageaccnt_3\":\"\",\"buylet_mortgageaccnt_4\":\"\",\"buylet_loanout_3\":\"\",\"buylet_loanout_4\":\"\",\"buylet_termremain_3\":\"\",\"buylet_termremain_4\":\"\",\"buylet_currinterest_3\":\"\",\"buylet_currinterest_4\":\"\",\"buylet_monthlymortgage_3\":\"\",\"buylet_monthlymortgage_4\":\"\",\"buylet_rateenddate_3\":\"//\",\"buylet_rateenddate_4\":\"//\",\"buylet_erc_3\":\"\",\"buylet_erc_4\":\"\",\"client_buyletrepay_3\":\"Repayment\",\"client_buyletrepay_4\":\"Repayment\",\"buylet_detail_3\":\"\",\"buylet_detail_4\":\"\",\"buylet_interestonly_3\":\"\",\"buylet_interestonly_4\":\"\"}]', 'ghg', '', 1, '2018-07-25 15:00:40'),
(4, '3547550203', '', '', '[{\"res_propaddress_1\":\"dghdwrts\",\"res_propaddress_2\":\"jjmj,mgm\",\"res_owner_1\":\"Joint,client_1,\",\"res_owner_2\":\"\",\"res_estimatedval_1\":\"\",\"res_estimatedval_2\":\"\",\"res_saleprice_1\":\"\",\"res_saleprice_2\":\"\",\"res_lender_1\":\"\",\"res_lender_2\":\"\",\"res_macctno_1\":\"\",\"res_macctno_2\":\"\",\"res_loanout_1\":\"\",\"res_loanout_2\":\"\",\"res_termremain_1\":\"\",\"res_termremain_2\":\"\",\"res_currinterest_1\":\"\",\"res_currinterest_2\":\"\",\"res_monthlymortgage_1\":\"\",\"res_monthlymortgage_2\":\"\",\"other_interesttype_1\":\"\",\"other_interesttype_2\":\"\",\"res_rateenddate_1\":\"//\",\"res_rateenddate_2\":\"//\",\"res_erc_1\":\"\",\"res_erc_2\":\"\",\"res_details_1\":\"\",\"res_details_2\":\"\",\"res_interestonly_1\":\"\",\"res_interestonly_2\":\"\"}]', '[{\"buylet_propaddress_1\":\"\",\"buylet_propaddress_2\":\"\",\"buylet_owner_1\":\"\",\"buylet_owner_2\":\"\",\"buylet_estimatedval_1\":\"\",\"buylet_estimatedval_2\":\"\",\"buylet_saleprice_1\":\"\",\"buylet_saleprice_2\":\"\",\"buylet_tenantterm_1\":\"\",\"buylet_tenantterm_2\":\"\",\"buylet_rentalincome_1\":\"\",\"buylet_rentalincome_2\":\"\",\"buylet_lender_1\":\"\",\"buylet_lender_2\":\"\",\"buylet_mortgageaccnt_1\":\"\",\"buylet_mortgageaccnt_2\":\"\",\"buylet_loanout_1\":\"\",\"buylet_loanout_2\":\"\",\"buylet_termremain_1\":\"\",\"buylet_termremain_2\":\"\",\"buylet_currinterest_1\":\"\",\"buylet_currinterest_2\":\"\",\"buylet_monthlymortgage_1\":\"\",\"buylet_monthlymortgage_2\":\"\",\"buylet_rateenddate_1\":\"//\",\"buylet_rateenddate_2\":\"//\",\"buylet_erc_1\":\"\",\"client_buyletrepay_1\":\"Repayment\",\"client_buyletrepay_2\":\"Repayment\",\"buylet_detail_1\":\"\",\"buylet_detail_2\":\"\",\"buylet_interestonly_1\":\"\",\"buylet_interestonly_2\":\"\"}]', '', '', 0, '2018-07-25 19:04:29'),
(5, '8609795396', '1', '1', '[{\"res_propaddress_1\":\"gfgfgfg\",\"res_propaddress_2\":\"\",\"res_owner_1\":\"client_1,\",\"res_owner_2\":\"\",\"res_estimatedval_1\":\"500000\",\"res_estimatedval_2\":\"\",\"res_saleprice_1\":\"500000\",\"res_saleprice_2\":\"\",\"client_existingmortgage_1\":\"Yes\",\"res_lender_1\":\"fgfdg\",\"res_lender_2\":\"\",\"res_macctno_1\":\"1256321\",\"res_macctno_2\":\"\",\"res_loanout_1\":\"10000\",\"res_loanout_2\":\"\",\"res_termremain_1\":\"fdgdfg\",\"res_termremain_2\":\"\",\"client_existingredeem_1\":\"Yes\",\"res_currinterest_1\":\"10\",\"res_currinterest_2\":\"\",\"res_monthlymortgage_1\":\"1000\",\"res_monthlymortgage_2\":\"\",\"client_existinginteresttype_1\":\"Fixed\",\"other_interesttype_1\":\"\",\"other_interesttype_2\":\"\",\"res_rateenddate_1\":\"30/08/2018\",\"res_rateenddate_2\":\"//\",\"client_existingerc_1\":\"Yes\",\"res_erc_1\":\"10000\",\"res_erc_2\":\"\",\"client_existingrepay_1\":\"Interest Only\",\"client_existingcurrent_1\":\"Yes\",\"client_existingrepaymethod_1\":\"Interest Only\",\"client_existingintend_1\":\"Savings\",\"res_details_1\":\"fdgfdg\",\"res_details_2\":\"\",\"res_interestonly_1\":\"10000\",\"res_interestonly_2\":\"\",\"client_existingnew_1\":\"Yes\"}]', '[{\"buylet_propaddress_1\":\"fgfdgfdg\",\"buylet_propaddress_2\":\"\",\"buylet_owner_1\":\"client_1,\",\"buylet_owner_2\":\"\",\"buylet_estimatedval_1\":\"200000\",\"buylet_estimatedval_2\":\"\",\"buylet_saleprice_1\":\"200000\",\"buylet_saleprice_2\":\"\",\"client_existinglet_1\":\"Yes\",\"client_buylettenant_1\":\"Family Member\",\"buylet_tenantterm_1\":\"fdgfdg\",\"buylet_tenantterm_2\":\"\",\"buylet_rentalincome_1\":\"10000\",\"buylet_rentalincome_2\":\"\",\"client_letsecured_1\":\"Yes\",\"buylet_lender_1\":\"gfdgfg\",\"buylet_lender_2\":\"\",\"buylet_mortgageaccnt_1\":\"123654\",\"buylet_mortgageaccnt_2\":\"\",\"buylet_loanout_1\":\"12365\",\"buylet_loanout_2\":\"\",\"buylet_termremain_1\":\"fgfdg\",\"buylet_termremain_2\":\"\",\"client_letredeem_1\":\"Yes\",\"buylet_currinterest_1\":\"5\",\"buylet_currinterest_2\":\"\",\"buylet_monthlymortgage_1\":\"10000\",\"buylet_monthlymortgage_2\":\"\",\"client_buyletinterest_1\":\"Variable\",\"buylet_rateenddate_1\":\"29/08/2018\",\"buylet_rateenddate_2\":\"//\",\"client_leterc_1\":\"Yes\",\"buylet_erc_1\":\"5000\",\"buylet_erc_2\":\"\",\"client_letrepay_1\":\"Yes\",\"client_letcurrent_1\":\"Yes\",\"client_buyletrepay_1\":\"Repayment\",\"client_buyletrepay_2\":\"Repayment\",\"client_buyletintend_1\":\"Investments\",\"buylet_detail_1\":\"fdgfdg\",\"buylet_detail_2\":\"\",\"buylet_interestonly_1\":\"10000\",\"buylet_interestonly_2\":\"\",\"client_letnew_1\":\"Yes\"}]', 'fgfdgdfgfdg', '', 0, '2018-08-20 09:46:04'),
(24, '5024515514', '1', '1', '[{\"res_propaddress_1\":\"10, Berrycroft Drive, TW13 \",\"res_propaddress_2\":\"\",\"res_owner_1\":\"Joint,\",\"res_owner_2\":\"\",\"res_estimatedval_1\":\"600,000\",\"res_estimatedval_2\":\"\",\"res_saleprice_1\":\"600,000\",\"res_saleprice_2\":\"\",\"client_existingmortgage_1\":\"Yes\",\"res_lender_1\":\"Santander\",\"res_lender_2\":\"\",\"res_macctno_1\":\"0198764578\",\"res_macctno_2\":\"\",\"res_loanout_1\":\"423,000\",\"res_loanout_2\":\"\",\"res_termremain_1\":\"23\",\"res_termremain_2\":\"\",\"client_existingredeem_1\":\"Yes\",\"res_currinterest_1\":\"1.98\",\"res_currinterest_2\":\"\",\"res_monthlymortgage_1\":\"1,123\",\"res_monthlymortgage_2\":\"\",\"client_existinginteresttype_1\":\"Fixed\",\"other_interesttype_1\":\"\",\"other_interesttype_2\":\"\",\"res_rateenddate_1\":\"30/06/2022\",\"res_rateenddate_2\":\"//\",\"client_existingerc_1\":\"No\",\"res_erc_1\":\"\",\"res_erc_2\":\"\",\"client_existingrepay_1\":\"Repayment\",\"client_existingrepaymethod_1\":\"Repayment\",\"res_details_1\":\"\",\"res_details_2\":\"\",\"res_interestonly_1\":\"\",\"res_interestonly_2\":\"\"}]', '[{\"buylet_propaddress_1\":\"7, Windsor Street, Kent, TW11 4PQ\",\"buylet_propaddress_2\":\"\",\"buylet_owner_1\":\"Joint,\",\"buylet_owner_2\":\"\",\"buylet_estimatedval_1\":\"450,000\",\"buylet_estimatedval_2\":\"\",\"buylet_saleprice_1\":\"450,000\",\"buylet_saleprice_2\":\"\",\"client_existinglet_1\":\"Yes\",\"client_buylettenant_1\":\"Working / Professional\",\"buylet_tenantterm_1\":\"1 Year\",\"buylet_tenantterm_2\":\"\",\"buylet_rentalincome_1\":\"1,000\",\"buylet_rentalincome_2\":\"\",\"client_letsecured_1\":\"Yes\",\"buylet_lender_1\":\"BM Solutions\",\"buylet_lender_2\":\"\",\"buylet_mortgageaccnt_1\":\"10345676870\",\"buylet_mortgageaccnt_2\":\"\",\"buylet_loanout_1\":\"330,000\",\"buylet_loanout_2\":\"\",\"buylet_termremain_1\":\"23\",\"buylet_termremain_2\":\"\",\"client_letredeem_1\":\"No\",\"buylet_currinterest_1\":\"1.65\",\"buylet_currinterest_2\":\"\",\"buylet_monthlymortgage_1\":\"453\",\"buylet_monthlymortgage_2\":\"\",\"client_buyletinterest_1\":\"Fixed\",\"buylet_rateenddate_1\":\"13/06/2023\",\"buylet_rateenddate_2\":\"//\",\"buylet_erc_1\":\"\",\"buylet_erc_2\":\"\",\"client_buyletrepay_1\":\"Repayment\",\"client_buyletrepay_2\":\"Repayment\",\"client_buyletintend_1\":\"Sale of mortgaged property\",\"buylet_detail_1\":\"\",\"buylet_detail_2\":\"\",\"buylet_interestonly_1\":\"\",\"buylet_interestonly_2\":\"\"}]', '', '', 1, '2022-02-21 11:35:07');

-- --------------------------------------------------------

--
-- Table structure for table `financial`
--

CREATE TABLE `financial` (
  `id` int(11) NOT NULL,
  `form_id` varchar(200) NOT NULL,
  `existing_1` varchar(200) NOT NULL,
  `existing_2` varchar(200) NOT NULL,
  `personal_loan` varchar(2500) NOT NULL,
  `hirepurchase` varchar(2500) NOT NULL,
  `hptotalmonthly_1` varchar(200) NOT NULL,
  `hptotalmonthly_2` varchar(200) NOT NULL,
  `creditcard` varchar(2500) NOT NULL,
  `cctotal_1` varchar(200) NOT NULL,
  `cctotal_2` varchar(200) NOT NULL,
  `overdraft` varchar(2500) NOT NULL,
  `odtotalmonthly_1` varchar(200) NOT NULL,
  `odtotalmonthly_2` varchar(200) NOT NULL,
  `spousal` varchar(2500) NOT NULL,
  `childmaintenance` varchar(2500) NOT NULL,
  `cmtotalmaintenance_1` varchar(200) NOT NULL,
  `cmtotalmaintenance_2` varchar(200) NOT NULL,
  `client_finsummary_1` varchar(200) NOT NULL,
  `client_finsummary_2` varchar(200) NOT NULL,
  `client_additionalnotes` varchar(1000) NOT NULL,
  `form_status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `financial`
--

INSERT INTO `financial` (`id`, `form_id`, `existing_1`, `existing_2`, `personal_loan`, `hirepurchase`, `hptotalmonthly_1`, `hptotalmonthly_2`, `creditcard`, `cctotal_1`, `cctotal_2`, `overdraft`, `odtotalmonthly_1`, `odtotalmonthly_2`, `spousal`, `childmaintenance`, `cmtotalmaintenance_1`, `cmtotalmaintenance_2`, `client_finsummary_1`, `client_finsummary_2`, `client_additionalnotes`, `form_status`, `created_at`) VALUES
(2, '3594043122', 'pl,cc', 'pl,cc', '[{\"pllender_1\":\"nhjjknhkjjlj\",\"pllender_2\":\"\",\"plborrow_1\":\"Joint\",\"plborrow_2\":\"\",\"plpurpose_1\":\"hjhkjhkj\",\"plpurpose_2\":\"\",\"plstartdate_1\":\"02/07/2008\",\"plstartdate_2\":\"//\",\"plenddate_1\":\"18/07/2016\",\"plenddate_2\":\"//\",\"ploriginal_1\":\"10000\",\"ploriginal_2\":\"\",\"plamountoutstanding_1\":\"2000\",\"plamountoutstanding_2\":\"\",\"plmonthlypayment_1\":\"500\",\"plmonthlypayment_2\":\"\",\"plapr_1\":\"5\",\"plapr_2\":\"\",\"plrepaidPersonal_1\":\"Yes\",\"plconsolidatePersonal_1\":\"Yes\"}] ', '[{\"hplender_1\":\"\",\"hplender_2\":\"\",\"hpborrow_1\":\"\",\"hpborrow_2\":\"\",\"hppurpose_1\":\"\",\"hppurpose_2\":\"\",\"hpstartdate_1\":\"//\",\"hpstartdate_2\":\"//\",\"hpenddate_1\":\"//\",\"hpenddate_2\":\"//\",\"hporiginal_1\":\"\",\"hporiginal_2\":\"\",\"hpamountoutstanding_1\":\"\",\"hpamountoutstanding_2\":\"\",\"hpmonthlypayment_1\":\"\",\"hpmonthlypayment_2\":\"\",\"hpapr_1\":\"\",\"hpapr_2\":\"\"}]', '', '', '[{\"cclender_1\":\"fgfgf\",\"cclender_2\":\"\",\"ccborrow_1\":\"Joint\",\"ccborrow_2\":\"\",\"cclimit_1\":\"100000\",\"cclimit_2\":\"\",\"ccamountoutstanding_1\":\"10000\",\"ccamountoutstanding_2\":\"\",\"ccpayment_1\":\"Yes\",\"ccapr_1\":\"10\",\"ccapr_2\":\"\",\"ccrepaidOrder_1\":\"Yes\",\"ccconsolidateOrder_1\":\"Yes\",\"ccbalance_1\":\"50000\",\"ccbalance_2\":\"\"}]', '50000', '', '[{\"odlender_1\":\"\",\"odlender_2\":\"\",\"odborrow_1\":\"\",\"odborrow_2\":\"\",\"odlimit_1\":\"\",\"odlimit_2\":\"\",\"odcurrentbalance_1\":\"\",\"odcurrentbalance_2\":\"\",\"odamountdrawn_1\":\"\",\"odapr_1\":\"\",\"odapr_2\":\"\",\"odmonthlyfee_1\":\"\",\"odmonthlyfee_2\":\"\",\"odbalance_1\":\"\",\"odbalance_2\":\"\"}]', '', '', '[{\"smenddate_1\":\"//\",\"smenddate_2\":\"//undefined\",\"smamount_1\":\"\",\"smamount_2\":\"\"}]', '[{\"cmenddate_1\":\"//\",\"cmenddate_2\":\"//undefined\",\"cmpayment_1\":\"\",\"cmpayment_2\":\"\"}]', '', '', '5000', '', '', 0, '2018-07-22 11:30:46'),
(5, '9288921029', 'pl,hp,cc,od,sm,cm', '', '[{\"pllender_1\":\"\",\"pllender_2\":\"\",\"plborrow_1\":\"\",\"plborrow_2\":\"\",\"plpurpose_1\":\"\",\"plpurpose_2\":\"\",\"plstartdate_1\":\"//\",\"plstartdate_2\":\"//\",\"plenddate_1\":\"//\",\"plenddate_2\":\"//\",\"ploriginal_1\":\"\",\"ploriginal_2\":\"\",\"plamountoutstanding_1\":\"\",\"plamountoutstanding_2\":\"\",\"plmonthlypayment_1\":\"\",\"plmonthlypayment_2\":\"\",\"plapr_1\":\"\",\"plapr_2\":\"\"},{\"pllender_3\":\"\",\"pllender_4\":\"\",\"plborrow_3\":\"Joint\",\"plborrow_4\":\"client_1\",\"plpurpose_3\":\"\",\"plpurpose_4\":\"\",\"plstartdate_3\":\"//\",\"plstartdate_4\":\"//\",\"plenddate_3\":\"//\",\"plenddate_4\":\"//\",\"ploriginal_3\":\"\",\"ploriginal_4\":\"\",\"plamountoutstanding_3\":\"\",\"plamountoutstanding_4\":\"\",\"plmonthlypayment_3\":\"\",\"plmonthlypayment_4\":\"\",\"plapr_3\":\"\",\"plapr_4\":\"\"}] ', '[{\"hplender_1\":\"\",\"hplender_2\":\"\",\"hpborrow_1\":\"\",\"hpborrow_2\":\"\",\"hppurpose_1\":\"\",\"hppurpose_2\":\"\",\"hpstartdate_1\":\"//\",\"hpstartdate_2\":\"//\",\"hpenddate_1\":\"//\",\"hpenddate_2\":\"//\",\"hporiginal_1\":\"\",\"hporiginal_2\":\"\",\"hpamountoutstanding_1\":\"\",\"hpamountoutstanding_2\":\"\",\"hpmonthlypayment_1\":\"\",\"hpmonthlypayment_2\":\"\",\"hpapr_1\":\"\",\"hpapr_2\":\"\"},{\"hplender_3\":\"\",\"hplender_4\":\"\",\"hpborrow_3\":\"client_1\",\"hpborrow_4\":\"Joint\",\"hppurpose_3\":\"\",\"hppurpose_4\":\"\",\"hpstartdate_3\":\"//\",\"hpstartdate_4\":\"//\",\"hpenddate_3\":\"//\",\"hpenddate_4\":\"//\",\"hporiginal_3\":\"\",\"hporiginal_4\":\"\",\"hpamountoutstanding_3\":\"\",\"hpamountoutstanding_4\":\"\",\"hpmonthlypayment_3\":\"\",\"hpmonthlypayment_4\":\"\",\"hpapr_3\":\"\",\"hpapr_4\":\"\"}]', '', '', '[{\"cclender_1\":\"\",\"cclender_2\":\"\",\"ccborrow_1\":\"\",\"ccborrow_2\":\"\",\"cclimit_1\":\"\",\"cclimit_2\":\"\",\"ccamountoutstanding_1\":\"\",\"ccamountoutstanding_2\":\"\",\"ccapr_1\":\"\",\"ccapr_2\":\"\",\"ccbalance_1\":\"\",\"ccbalance_2\":\"\"}]', '', '', '[{\"odlender_1\":\"\",\"odlender_2\":\"\",\"odborrow_1\":\"\",\"odborrow_2\":\"\",\"odlimit_1\":\"\",\"odlimit_2\":\"\",\"odcurrentbalance_1\":\"\",\"odcurrentbalance_2\":\"\",\"odamountdrawn_1\":\"\",\"odamountdrawn_2\":\"\",\"odapr_1\":\"\",\"odapr_2\":\"\",\"odmonthlyfee_1\":\"\",\"odmonthlyfee_2\":\"\",\"odbalance_1\":\"\",\"odbalance_2\":\"\"}]', '', '', '[{\"smenddate_1\":\"//\",\"smenddate_2\":\"//undefined\",\"smamount_1\":\"\",\"smamount_2\":\"\"}]', '[{\"cmenddate_1\":\"//\",\"cmenddate_2\":\"//undefined\",\"cmpayment_1\":\"\",\"cmpayment_2\":\"\"}]', '', '', '1234', '2134', '', 1, '2018-07-31 03:29:43'),
(6, '8609795396', 'cc,od', '', '[{\"pllender_1\":\"fgfgf\",\"pllender_2\":\"\",\"plborrow_1\":\"client_1\",\"plborrow_2\":\"\",\"plpurpose_1\":\"Car purchase\",\"plpurpose_2\":\"\",\"plstartdate_1\":\"01/08/2018\",\"plstartdate_2\":\"//\",\"plenddate_1\":\"27/08/2020\",\"plenddate_2\":\"//\",\"ploriginal_1\":\"100000\",\"ploriginal_2\":\"\",\"plamountoutstanding_1\":\"2000\",\"plamountoutstanding_2\":\"\",\"plmonthlypayment_1\":\"500\",\"plmonthlypayment_2\":\"\",\"plapr_1\":\"5\",\"plapr_2\":\"\",\"plrepaidPersonal_1\":\"Yes\",\"plconsolidatePersonal_1\":\"Yes\"},{\"pllender_3\":\"fdgfdgfdg\",\"pllender_4\":\"\",\"plborrow_3\":\"client_1\",\"plborrow_4\":\"\",\"plpurpose_3\":\"fgfdgfd\",\"plpurpose_4\":\"\",\"plstartdate_3\":\"12/08/2014\",\"plstartdate_4\":\"//\",\"plenddate_3\":\"21/08/2017\",\"plenddate_4\":\"//\",\"ploriginal_3\":\"10000\",\"ploriginal_4\":\"\",\"plamountoutstanding_3\":\"10000\",\"plamountoutstanding_4\":\"\",\"plmonthlypayment_3\":\"500\",\"plmonthlypayment_4\":\"\",\"plapr_3\":\"10\",\"plapr_4\":\"\",\"plrepaidPersonal_3\":\"Yes\",\"plconsolidatePersonal_3\":\"Yes\"}] ', '[{\"hplender_1\":\"\",\"hplender_2\":\"\",\"hpborrow_1\":\"\",\"hpborrow_2\":\"\",\"hppurpose_1\":\"\",\"hppurpose_2\":\"\",\"hpstartdate_1\":\"//\",\"hpstartdate_2\":\"//\",\"hpenddate_1\":\"//\",\"hpenddate_2\":\"//\",\"hporiginal_1\":\"\",\"hporiginal_2\":\"\",\"hpamountoutstanding_1\":\"\",\"hpamountoutstanding_2\":\"\",\"hpmonthlypayment_1\":\"\",\"hpmonthlypayment_2\":\"\",\"hpapr_1\":\"\",\"hpapr_2\":\"\"}]', '', '', '[{\"cclender_1\":\"gfdgdfg\",\"cclender_2\":\"\",\"ccborrow_1\":\"client_1\",\"ccborrow_2\":\"\",\"cclimit_1\":\"100000\",\"cclimit_2\":\"\",\"ccamountoutstanding_1\":\"10000\",\"ccamountoutstanding_2\":\"\",\"ccpayment_1\":\"Yes\",\"ccapr_1\":\"10\",\"ccapr_2\":\"\",\"ccrepaidOrder_1\":\"Yes\",\"ccconsolidateOrder_1\":\"Yes\",\"ccbalance_1\":\"50000\",\"ccbalance_2\":\"\"},{\"cclender_3\":\"fgdfgfd\",\"cclender_4\":\"\",\"ccborrow_3\":\"client_1\",\"ccborrow_4\":\"\",\"cclimit_3\":\"5000\",\"cclimit_4\":\"\",\"ccamountoutstanding_3\":\"1000\",\"ccamountoutstanding_4\":\"\",\"ccpayment_3\":\"Yes\",\"ccapr_3\":\"10\",\"ccapr_4\":\"\",\"ccrepaidOrder_3\":\"Yes\",\"ccconsolidateOrder_3\":\"Yes\",\"ccbalance_3\":\"1000\",\"ccbalance_4\":\"\"}]', '50000', '', '[{\"odlender_1\":\"gfdgfg\",\"odlender_2\":\"\",\"odborrow_1\":\"client_1\",\"odborrow_2\":\"\",\"odlimit_1\":\"10000\",\"odlimit_2\":\"\",\"odcurrentbalance_1\":\"1000\",\"odcurrentbalance_2\":\"\",\"odamountdrawn_1\":\"1000\",\"odamountdrawn_2\":\"\",\"odapr_1\":\"10\",\"odapr_2\":\"\",\"odmonthlyfee_1\":\"500\",\"odmonthlyfee_2\":\"\",\"odrepaidOverdraft_1\":\"Yes\",\"odbalance_1\":\"500\",\"odbalance_2\":\"\",\"odconsolidateOverdraft_1\":\"Yes\",\"odlender_3\":\"ffdgfdgfg\",\"odlender_4\":\"\",\"odborrow_3\":\"client_1\",\"odborrow_4\":\"\",\"odlimit_3\":\"1000\",\"odlimit_4\":\"\",\"odcurrentbalance_3\":\"1000\",\"odcurrentbalance_4\":\"\",\"odamountdrawn_3\":\"500\",\"odamountdrawn_4\":\"\",\"odapr_3\":\"10\",\"odapr_4\":\"\",\"odmonthlyfee_3\":\"1000\",\"odmonthlyfee_4\":\"\",\"odbalance_3\":\"5000\",\"odbalance_4\":\"\",\"odconsolidateOverdraft_3\":\"Yes\"},{\"odlender_1\":\"gfdgfg\",\"odlender_2\":\"\",\"odborrow_1\":\"client_1\",\"odborrow_2\":\"\",\"odlimit_1\":\"10000\",\"odlimit_2\":\"\",\"odcurrentbalance_1\":\"1000\",\"odcurrentbalance_2\":\"\",\"odamountdrawn_1\":\"1000\",\"odamountdrawn_2\":\"\",\"odapr_1\":\"10\",\"odapr_2\":\"\",\"odmonthlyfee_1\":\"500\",\"odmonthlyfee_2\":\"\",\"odrepaidOverdraft_1\":\"Yes\",\"odbalance_1\":\"500\",\"odbalance_2\":\"\",\"odconsolidateOverdraft_1\":\"Yes\",\"odlender_3\":\"ffdgfdgfg\",\"odlender_4\":\"\",\"odborrow_3\":\"client_1\",\"odborrow_4\":\"\",\"odlimit_3\":\"1000\",\"odlimit_4\":\"\",\"odcurrentbalance_3\":\"1000\",\"odcurrentbalance_4\":\"\",\"odamountdrawn_3\":\"500\",\"odamountdrawn_4\":\"\",\"odapr_3\":\"10\",\"odapr_4\":\"\",\"odmonthlyfee_3\":\"1000\",\"odmonthlyfee_4\":\"\",\"odbalance_3\":\"5000\",\"odbalance_4\":\"\",\"odconsolidateOverdraft_3\":\"Yes\"}]', '5000', '', '[{\"smenddate_1\":\"//\",\"smenddate_2\":\"//undefined\",\"smamount_1\":\"\",\"smamount_2\":\"\"}]', '[{\"cmenddate_1\":\"//\",\"cmenddate_2\":\"//undefined\",\"cmpayment_1\":\"\",\"cmpayment_2\":\"\"}]', '', '', '5000', '', '', 1, '2018-08-20 09:43:35'),
(8, '2716324854', 'pl', '', '[{\"pllender_1\":\"\",\"pllender_2\":\"\",\"plborrow_1\":\"Joint,client_1\",\"plborrow_2\":\"\",\"plpurpose_1\":\"\",\"plpurpose_2\":\"\",\"plstartdate_1\":\"//\",\"plstartdate_2\":\"//\",\"plenddate_1\":\"//\",\"plenddate_2\":\"//\",\"ploriginal_1\":\"\",\"ploriginal_2\":\"\",\"plamountoutstanding_1\":\"\",\"plamountoutstanding_2\":\"\",\"plmonthlypayment_1\":\"\",\"plmonthlypayment_2\":\"\",\"plapr_1\":\"\",\"plapr_2\":\"\"}] ', '[{\"hplender_1\":\"\",\"hplender_2\":\"\",\"hpborrow_1\":\"\",\"hpborrow_2\":\"\",\"hppurpose_1\":\"\",\"hppurpose_2\":\"\",\"hpstartdate_1\":\"//\",\"hpstartdate_2\":\"//\",\"hpenddate_1\":\"//\",\"hpenddate_2\":\"//\",\"hporiginal_1\":\"\",\"hporiginal_2\":\"\",\"hpamountoutstanding_1\":\"\",\"hpamountoutstanding_2\":\"\",\"hpmonthlypayment_1\":\"\",\"hpmonthlypayment_2\":\"\",\"hpapr_1\":\"\",\"hpapr_2\":\"\"}]', '', '', '[{\"cclender_1\":\"\",\"cclender_2\":\"\",\"ccborrow_1\":\"\",\"ccborrow_2\":\"\",\"cclimit_1\":\"\",\"cclimit_2\":\"\",\"ccamountoutstanding_1\":\"\",\"ccamountoutstanding_2\":\"\",\"ccapr_1\":\"\",\"ccapr_2\":\"\",\"ccbalance_1\":\"\",\"ccbalance_2\":\"\"}]', '', '', '[{\"odlender_1\":\"\",\"odlender_2\":\"\",\"odborrow_1\":\"\",\"odborrow_2\":\"\",\"odlimit_1\":\"\",\"odlimit_2\":\"\",\"odcurrentbalance_1\":\"\",\"odcurrentbalance_2\":\"\",\"odamountdrawn_1\":\"\",\"odamountdrawn_2\":\"\",\"odapr_1\":\"\",\"odapr_2\":\"\",\"odmonthlyfee_1\":\"\",\"odmonthlyfee_2\":\"\",\"odbalance_1\":\"\",\"odbalance_2\":\"\"}]', '', '', '[{\"smenddate_1\":\"//\",\"smenddate_2\":\"//undefined\",\"smamount_1\":\"\",\"smamount_2\":\"\"}]', '[{\"cmenddate_1\":\"//\",\"cmenddate_2\":\"//undefined\",\"cmpayment_1\":\"\",\"cmpayment_2\":\"\"}]', '', '', '', '', '', 0, '2018-08-24 04:23:02'),
(9, '9921519822', 'pl', '', '[{\"pllender_1\":\"\",\"pllender_2\":\"\",\"plborrow_1\":\"Joint,client_1\",\"plborrow_2\":\"client_1,client_2\",\"plpurpose_1\":\"\",\"plpurpose_2\":\"\",\"plstartdate_1\":\"//\",\"plstartdate_2\":\"//\",\"plenddate_1\":\"//\",\"plenddate_2\":\"//\",\"ploriginal_1\":\"\",\"ploriginal_2\":\"\",\"plamountoutstanding_1\":\"\",\"plamountoutstanding_2\":\"\",\"plmonthlypayment_1\":\"\",\"plmonthlypayment_2\":\"\",\"plapr_1\":\"\",\"plapr_2\":\"\"}] ', '[{\"hplender_1\":\"\",\"hplender_2\":\"\",\"hpborrow_1\":\"\",\"hpborrow_2\":\"\",\"hppurpose_1\":\"\",\"hppurpose_2\":\"\",\"hpstartdate_1\":\"//\",\"hpstartdate_2\":\"//\",\"hpenddate_1\":\"//\",\"hpenddate_2\":\"//\",\"hporiginal_1\":\"\",\"hporiginal_2\":\"\",\"hpamountoutstanding_1\":\"\",\"hpamountoutstanding_2\":\"\",\"hpmonthlypayment_1\":\"\",\"hpmonthlypayment_2\":\"\",\"hpapr_1\":\"\",\"hpapr_2\":\"\"}]', '', '', '[{\"cclender_1\":\"\",\"cclender_2\":\"\",\"ccborrow_1\":\"\",\"ccborrow_2\":\"\",\"cclimit_1\":\"\",\"cclimit_2\":\"\",\"ccamountoutstanding_1\":\"\",\"ccamountoutstanding_2\":\"\",\"ccapr_1\":\"\",\"ccapr_2\":\"\",\"ccbalance_1\":\"\",\"ccbalance_2\":\"\"}]', '', '', '[{\"odlender_1\":\"\",\"odlender_2\":\"\",\"odborrow_1\":\"\",\"odborrow_2\":\"\",\"odlimit_1\":\"\",\"odlimit_2\":\"\",\"odcurrentbalance_1\":\"\",\"odcurrentbalance_2\":\"\",\"odamountdrawn_1\":\"\",\"odamountdrawn_2\":\"\",\"odapr_1\":\"\",\"odapr_2\":\"\",\"odmonthlyfee_1\":\"\",\"odmonthlyfee_2\":\"\",\"odbalance_1\":\"\",\"odbalance_2\":\"\"}]', '', '', '[{\"smenddate_1\":\"//\",\"smenddate_2\":\"//undefined\",\"smamount_1\":\"\",\"smamount_2\":\"\"}]', '[{\"cmenddate_1\":\"//\",\"cmenddate_2\":\"//undefined\",\"cmpayment_1\":\"\",\"cmpayment_2\":\"\"}]', '', '', '', '', '', 0, '2018-08-24 04:24:35'),
(26, '5024515514', 'pl', 'hp', '[{\"pllender_1\":\"HSBC\",\"pllender_2\":\"\",\"plborrow_1\":\"client_1\",\"plborrow_2\":\"\",\"plpurpose_1\":\"Personal Loan\",\"plpurpose_2\":\"\",\"plstartdate_1\":\"14/05/2018\",\"plstartdate_2\":\"//\",\"plenddate_1\":\"14/05/2023\",\"plenddate_2\":\"//\",\"ploriginal_1\":\"10,000\",\"ploriginal_2\":\"\",\"plamountoutstanding_1\":\"3,000\",\"plamountoutstanding_2\":\"\",\"plmonthlypayment_1\":\"200\",\"plmonthlypayment_2\":\"\",\"plapr_1\":\"\",\"plapr_2\":\"\",\"plrepaidPersonal_1\":\"No\",\"plrepaidPersonal_2\":\"No\",\"plconsolidatePersonal_1\":\"No\",\"plconsolidatePersonal_2\":\"No\"}] ', '[{\"hplender_1\":\"Toyota Financial\",\"hplender_2\":\"\",\"hpborrow_1\":\"client_2\",\"hpborrow_2\":\"\",\"hppurpose_1\":\"Car Loan\",\"hppurpose_2\":\"\",\"hpstartdate_1\":\"16/10/2020\",\"hpstartdate_2\":\"//\",\"hpenddate_1\":\"16/10/2024\",\"hpenddate_2\":\"//\",\"hporiginal_1\":\"\",\"hporiginal_2\":\"\",\"hpamountoutstanding_1\":\"\",\"hpamountoutstanding_2\":\"\",\"hpmonthlypayment_1\":\"450\",\"hpmonthlypayment_2\":\"\",\"hpapr_1\":\"\",\"hpapr_2\":\"\"}]', '', '', '[{\"cclender_1\":\"\",\"cclender_2\":\"\",\"ccborrow_1\":\"\",\"ccborrow_2\":\"\",\"cclimit_1\":\"\",\"cclimit_2\":\"\",\"ccamountoutstanding_1\":\"\",\"ccamountoutstanding_2\":\"\",\"ccapr_1\":\"\",\"ccapr_2\":\"\",\"ccbalance_1\":\"\",\"ccbalance_2\":\"\"}]', '', '', '[{\"odlender_1\":\"\",\"odlender_2\":\"\",\"odborrow_1\":\"\",\"odborrow_2\":\"\",\"odlimit_1\":\"\",\"odlimit_2\":\"\",\"odcurrentbalance_1\":\"\",\"odcurrentbalance_2\":\"\",\"odamountdrawn_1\":\"\",\"odamountdrawn_2\":\"\",\"odapr_1\":\"\",\"odapr_2\":\"\",\"odmonthlyfee_1\":\"\",\"odmonthlyfee_2\":\"\",\"odbalance_1\":\"\",\"odbalance_2\":\"\"}]', '', '', '[{\"smenddate_1\":\"//\",\"smenddate_2\":\"//undefined\",\"smamount_1\":\"\",\"smamount_2\":\"\"}]', '[{\"cmenddate_1\":\"//\",\"cmenddate_2\":\"//undefined\",\"cmpayment_1\":\"\",\"cmpayment_2\":\"\"}]', '', '', '', '', '', 1, '2022-02-21 11:33:15');

-- --------------------------------------------------------

--
-- Table structure for table `form_detail`
--

CREATE TABLE `form_detail` (
  `id` int(11) NOT NULL,
  `form_id` varchar(200) NOT NULL,
  `user_id` varchar(200) NOT NULL,
  `client_name` varchar(200) NOT NULL,
  `advisor_name` varchar(200) NOT NULL,
  `date_completed` varchar(200) NOT NULL,
  `form_type` varchar(200) NOT NULL,
  `form_status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_detail`
--

INSERT INTO `form_detail` (`id`, `form_id`, `user_id`, `client_name`, `advisor_name`, `date_completed`, `form_type`, `form_status`, `created_at`) VALUES
(41, '6388565252', '5', 'Client Form, Client 2 Form 2', '', '', 'double', 1, '2018-11-02 12:14:17'),
(69, '8965912610', '1', 'Test1 Surname1, Test2 Surname2', '', '', 'double', 1, '2020-09-22 11:21:09'),
(79, '6261893266', '1', 'John Smith and Kathy Smith', '', '', 'double', 1, '2020-10-05 09:28:59'),
(80, '1271326003', '1', 'First Last Test', '', '', 'single', 1, '2020-10-05 09:44:30'),
(81, '9404682413', '1', 'Matthew  Quinn and Rebecca O\'Leary', '', '', 'double', 0, '2020-10-05 12:46:19'),
(117, '9263235596', '1', 'Bharat Agrawal,  ', '', '', 'double', 0, '2022-02-18 16:04:22'),
(121, '5024515514', '1', 'Amit Sharma and Nidhi Kalra', '', '', 'double', 1, '2022-02-21 11:04:42'),
(122, '1891764262', '1', '', '', '', 'single', 0, '2022-02-22 21:47:57'),
(123, '7257554731', '1', '', '', '', 'single', 0, '2022-02-28 04:59:49'),
(124, '1945764822', '1', '', '', '', 'double', 0, '2022-02-28 10:07:55'),
(125, '2519535557', '1', '', '', '', 'single', 0, '2022-02-28 10:08:27'),
(126, '5710370287', '1', '', '', '', 'single', 0, '2022-02-28 10:10:07'),
(127, '9035170134', '1', '', '', '', 'single', 0, '2022-03-04 08:44:44'),
(128, '4955324907', '1', '', '', '', 'single', 0, '2022-03-04 08:45:23'),
(129, '3863450103', '1', '', '', '', 'double', 0, '2022-03-04 08:45:32'),
(130, '9346765867', '1', '', '', '', 'double', 0, '2022-03-04 08:45:33'),
(131, '2446005649', '1', '', '', '', 'single', 0, '2022-03-04 08:45:46'),
(132, '1738305855', '1', '', '', '', 'double', 0, '2022-03-04 08:45:55'),
(133, '9192389693', '1', '', '', '', 'single', 0, '2022-03-04 08:46:03'),
(134, '7094315960', '1', ' ', '', '', 'single', 0, '2022-03-04 08:48:56'),
(135, '1634037359', '1', '', '', '', 'double', 0, '2022-03-04 08:57:02'),
(136, '8809327841', '1', '', '', '', 'single', 0, '2022-03-04 08:57:28'),
(137, '6881902160', '1', ' ', '', '', 'single', 0, '2022-03-04 08:58:12'),
(138, '5256968798', '1', 'Hemendra singh rajput', '', '', 'single', 0, '2022-03-04 09:00:42'),
(139, '5435559286', '1', ' ,  ', '', '', 'double', 0, '2022-03-04 10:27:32'),
(140, '6539798179', '1', ' ', '', '', 'single', 0, '2022-03-05 06:57:59'),
(141, '9498516006', '1', ' ,  ', '', '', 'double', 0, '2022-03-05 07:18:10'),
(142, '2288584753', '1', 'ytrytry yrt', '', '', 'single', 0, '2022-03-05 07:22:50'),
(143, '5360486952', '1', '', '', '', 'single', 0, '2022-03-05 08:37:29'),
(144, '4327360031', '1', 'ytry ytr and ytry ytr', '', '', 'double', 0, '2022-03-05 08:37:38'),
(145, '4866404820', '1', ' ', '', '', 'single', 0, '2022-03-05 08:44:59');

-- --------------------------------------------------------

--
-- Table structure for table `mortgage_loan`
--

CREATE TABLE `mortgage_loan` (
  `id` int(11) NOT NULL,
  `form_id` varchar(200) NOT NULL,
  `form_status` int(11) NOT NULL,
  `client_type` varchar(200) NOT NULL,
  `purpose` varchar(200) NOT NULL,
  `scenario_notes` varchar(500) NOT NULL,
  `end_of_term` varchar(200) NOT NULL,
  `repay_the_capital` varchar(200) NOT NULL,
  `interest_only` varchar(200) NOT NULL,
  `intending` varchar(200) NOT NULL,
  `repayment_notes` varchar(500) NOT NULL,
  `repay_your_mortgage` varchar(200) NOT NULL,
  `provide_reasons` varchar(500) NOT NULL,
  `expected_retirement` varchar(200) NOT NULL,
  `payments_in` varchar(500) NOT NULL,
  `estimated_value` varchar(200) NOT NULL,
  `loan_amount` varchar(200) NOT NULL,
  `loan_to_value` varchar(200) NOT NULL,
  `proposed_term` varchar(200) NOT NULL,
  `amount_1` varchar(200) NOT NULL,
  `amount_2` varchar(200) NOT NULL,
  `source_1` varchar(200) NOT NULL,
  `source_2` varchar(200) NOT NULL,
  `is_this_repayable_1` varchar(200) NOT NULL,
  `is_this_repayable_2` varchar(200) NOT NULL,
  `notes` varchar(500) NOT NULL,
  `transaction_subject` varchar(200) NOT NULL,
  `scheme_type` varchar(200) NOT NULL,
  `discount` varchar(200) NOT NULL,
  `re_mortgaged` varchar(200) NOT NULL,
  `ownership_body` varchar(200) NOT NULL,
  `monthly_rent` varchar(200) NOT NULL,
  `buy_agency` varchar(200) NOT NULL,
  `monthly_equity` varchar(200) NOT NULL,
  `additional_notes` varchar(500) NOT NULL,
  `debt_amount` varchar(200) NOT NULL,
  `debt_details` varchar(200) NOT NULL,
  `home_amount` varchar(200) NOT NULL,
  `home_details` varchar(200) NOT NULL,
  `other_amount` varchar(200) NOT NULL,
  `other_details` varchar(500) NOT NULL,
  `currently_tenanted` varchar(200) NOT NULL,
  `to_remain` varchar(200) NOT NULL,
  `ast` varchar(200) NOT NULL,
  `how_long` varchar(200) NOT NULL,
  `maximum_number` varchar(200) NOT NULL,
  `tenants_party` varchar(200) NOT NULL,
  `hmo_license` varchar(200) NOT NULL,
  `tenants_will_occupy` varchar(200) NOT NULL,
  `rental_income` varchar(200) NOT NULL,
  `present_state` varchar(200) NOT NULL,
  `refurbishment` varchar(200) NOT NULL,
  `estimated_timescale` varchar(200) NOT NULL,
  `void_periods` varchar(200) NOT NULL,
  `bridging_finance` varchar(200) NOT NULL,
  `family_occupy` varchar(200) NOT NULL,
  `security_for` varchar(200) NOT NULL,
  `charge_offered` varchar(200) NOT NULL,
  `for_sale` varchar(300) NOT NULL,
  `have_accepted` varchar(200) NOT NULL,
  `exchange_contracts` varchar(200) NOT NULL,
  `complete_purchase` varchar(200) NOT NULL,
  `been_made` varchar(200) NOT NULL,
  `preferred_payment` varchar(200) NOT NULL,
  `reason` varchar(500) NOT NULL,
  `current_and_bridging` varchar(500) NOT NULL,
  `exit_strategy` varchar(200) NOT NULL,
  `last_notes` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mortgage_loan`
--

INSERT INTO `mortgage_loan` (`id`, `form_id`, `form_status`, `client_type`, `purpose`, `scenario_notes`, `end_of_term`, `repay_the_capital`, `interest_only`, `intending`, `repayment_notes`, `repay_your_mortgage`, `provide_reasons`, `expected_retirement`, `payments_in`, `estimated_value`, `loan_amount`, `loan_to_value`, `proposed_term`, `amount_1`, `amount_2`, `source_1`, `source_2`, `is_this_repayable_1`, `is_this_repayable_2`, `notes`, `transaction_subject`, `scheme_type`, `discount`, `re_mortgaged`, `ownership_body`, `monthly_rent`, `buy_agency`, `monthly_equity`, `additional_notes`, `debt_amount`, `debt_details`, `home_amount`, `home_details`, `other_amount`, `other_details`, `currently_tenanted`, `to_remain`, `ast`, `how_long`, `maximum_number`, `tenants_party`, `hmo_license`, `tenants_will_occupy`, `rental_income`, `present_state`, `refurbishment`, `estimated_timescale`, `void_periods`, `bridging_finance`, `family_occupy`, `security_for`, `charge_offered`, `for_sale`, `have_accepted`, `exchange_contracts`, `complete_purchase`, `been_made`, `preferred_payment`, `reason`, `current_and_bridging`, `exit_strategy`, `last_notes`, `created_at`) VALUES
(1, '9288921029', 1, 'First_Time_Buyer', 'House_Purchase,Bridging_Loan', 'bgnggdbgb', 'No', 'Yes', '', 'Investments,Overpayments,Flat,Commonhold', 'fgfegvwe', 'fvfgvff', 'fgvfevevg', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Yes', 'Right to Buy,Shared Ownership', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'dgghdgh', '2018-07-27 12:32:12'),
(2, '8609795396', 0, 'First_Time_Buyer', 'House_Purchase', 'fsdfdgddgf', 'Yes', 'Yes', '1', 'Investments', 'dfdfdf', 'fdf', 'fdfdf', 'fdf', 'dsfdf', '1000000', '500000', '10', 'fgghk', '500000', '', 'Savings', '', 'Yes', '', 'dfdfdf', 'Yes', '>Help to Buy 1', '5', '5', 'yyry', '12000', 'me', '10000', 'jhjkkj', '10000', 'jhjkjl', '10000', 'hjknkkm', '10000', 'jhhklkm', 'Yes', 'Yes', 'Yes', '2', '1', 'Yes', 'Yes', 'Working / Professional', '10000', 'Yes', '1000', '2', 'jkjlkl;', 'Property_Purchase', 'Yes', 'Residential (regulated)', 'First_Charge', 'Yes', 'Yes', 'hh', 'jkk', 'Yes', 'Serviced', 'hkjkklm', 'hjkjkj', 'Sale_of_Property', 'hjhkjjnjkl', '2018-08-20 11:32:31'),
(22, '6261893266', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-03-04 08:40:23'),
(21, '5024515514', 0, 'Home_Owner', 'Re-mortgage', '', 'Yes', '', '', '', '', '24', '', 'No', '', '600,000', '540,000', '90', '24', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-02-21 11:41:40');

-- --------------------------------------------------------

--
-- Table structure for table `mortgage_needs`
--

CREATE TABLE `mortgage_needs` (
  `id` int(11) NOT NULL,
  `specific_requirements` varchar(500) NOT NULL,
  `rate_increases` varchar(200) NOT NULL,
  `client_reason` varchar(500) NOT NULL,
  `exact_repayment` varchar(200) NOT NULL,
  `over_what_period` varchar(200) NOT NULL,
  `fixed_reason` varchar(500) NOT NULL,
  `the_boe` varchar(200) NOT NULL,
  `variable_period` varchar(200) NOT NULL,
  `variable_reason` varchar(500) NOT NULL,
  `capped_repayment` varchar(200) NOT NULL,
  `capped_period` varchar(200) NOT NULL,
  `capped_reason` varchar(500) NOT NULL,
  `rate_repayment` varchar(200) NOT NULL,
  `rate_period` varchar(200) NOT NULL,
  `rate_reason` varchar(500) NOT NULL,
  `early_pay` varchar(200) NOT NULL,
  `early_pay_details` varchar(200) NOT NULL,
  `early_move` varchar(200) NOT NULL,
  `early_move_details` varchar(200) NOT NULL,
  `erc` varchar(200) NOT NULL,
  `erc_period` varchar(200) NOT NULL,
  `erc_reason` varchar(500) NOT NULL,
  `priorities_1` varchar(200) NOT NULL,
  `priorities_2` varchar(200) NOT NULL,
  `priorities_3` varchar(200) NOT NULL,
  `priorities_4` varchar(200) NOT NULL,
  `priorities_5` varchar(200) NOT NULL,
  `overpayment_facility` varchar(200) NOT NULL,
  `new_annum` varchar(200) NOT NULL,
  `overpayment_reason` varchar(500) NOT NULL,
  `underpayment` varchar(200) NOT NULL,
  `underpayment_reason` varchar(500) NOT NULL,
  `holiday` varchar(200) NOT NULL,
  `holiday_reason` varchar(500) NOT NULL,
  `offset` varchar(200) NOT NULL,
  `offset_reason` varchar(500) NOT NULL,
  `borrowing_facility` varchar(200) NOT NULL,
  `borrowing_reason` varchar(500) NOT NULL,
  `portability` varchar(200) NOT NULL,
  `portability_reason` varchar(500) NOT NULL,
  `fees_product` varchar(200) NOT NULL,
  `fees_loan` varchar(200) NOT NULL,
  `fees_loan_reason` varchar(500) NOT NULL,
  `fees_valuation` varchar(200) NOT NULL,
  `fees_lender` varchar(200) NOT NULL,
  `fees_lender_reason` varchar(500) NOT NULL,
  `fees_legal` varchar(200) NOT NULL,
  `legal_fees` varchar(200) NOT NULL,
  `legal_fees_reason` varchar(500) NOT NULL,
  `completion_timescale` varchar(200) NOT NULL,
  `completion_timescale_reason` varchar(500) NOT NULL,
  `priorities_a` varchar(200) NOT NULL,
  `priorities_b` varchar(200) NOT NULL,
  `priorities_c` varchar(200) NOT NULL,
  `priorities_d` varchar(200) NOT NULL,
  `priorities_e` varchar(200) NOT NULL,
  `critical_illness` varchar(200) NOT NULL,
  `term_illness` varchar(200) NOT NULL,
  `your_finances` varchar(200) NOT NULL,
  `illness_reason` varchar(500) NOT NULL,
  `adequate_buildings` varchar(200) NOT NULL,
  `building_reason` varchar(500) NOT NULL,
  `accident_illness` varchar(200) NOT NULL,
  `accident_unemployed` varchar(200) NOT NULL,
  `accident_finances` varchar(200) NOT NULL,
  `accident_reason` varchar(500) NOT NULL,
  `form_id` varchar(200) NOT NULL,
  `form_status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mortgage_needs`
--

INSERT INTO `mortgage_needs` (`id`, `specific_requirements`, `rate_increases`, `client_reason`, `exact_repayment`, `over_what_period`, `fixed_reason`, `the_boe`, `variable_period`, `variable_reason`, `capped_repayment`, `capped_period`, `capped_reason`, `rate_repayment`, `rate_period`, `rate_reason`, `early_pay`, `early_pay_details`, `early_move`, `early_move_details`, `erc`, `erc_period`, `erc_reason`, `priorities_1`, `priorities_2`, `priorities_3`, `priorities_4`, `priorities_5`, `overpayment_facility`, `new_annum`, `overpayment_reason`, `underpayment`, `underpayment_reason`, `holiday`, `holiday_reason`, `offset`, `offset_reason`, `borrowing_facility`, `borrowing_reason`, `portability`, `portability_reason`, `fees_product`, `fees_loan`, `fees_loan_reason`, `fees_valuation`, `fees_lender`, `fees_lender_reason`, `fees_legal`, `legal_fees`, `legal_fees_reason`, `completion_timescale`, `completion_timescale_reason`, `priorities_a`, `priorities_b`, `priorities_c`, `priorities_d`, `priorities_e`, `critical_illness`, `term_illness`, `your_finances`, `illness_reason`, `adequate_buildings`, `building_reason`, `accident_illness`, `accident_unemployed`, `accident_finances`, `accident_reason`, `form_id`, `form_status`, `created_at`) VALUES
(1, 'fgdgdghdgh', 'Moderately_Concerned', '', 'Very_important', 'fsvsfv', 'sfvsfvsfv', 'Very_important', 'fbdgnmdhnd', 'vfvsfv', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Yes', 'No', 'Yes', '', '', '', '', '', 'Yes', '', '9288921029', 1, '2018-07-29 11:02:24'),
(2, 'ffgyguyg', 'Moderately_Concerned', 'hhkk', 'Very_important', 'sdasdasd', 'hhkj', 'Very_important', 'sadasd', 'gjhjkkjn', 'Very_important', 'sadasd', 'jljkl', 'Very_important', 'kjljkl', 'kjlkl', 'Yes', 'ljklkjl', 'Yes', 'jkljlkjl', 'Moderately_important', 'ljklk', 'jljklkl', 'jljkl', 'jklkl', 'kjlkl', 'jklkl', 'jkljl', 'Not_important', 'Yes', 'jljkl', 'Very_important', 'jklkjl', 'Very_important', 'jlk;lhgf', 'Very_important', 'gfgfg', 'Very_important', 'fdg', 'Very_important', 'gffgfg', 'Yes', 'Moderately_important', 'dfgfgfg', '', 'Very_important', 'fgfgfg', '', 'Moderately_important', 'dfgdgfg', 'Very_important', 'gfdgg', 'fggg', 'gfg', 'fgfg', 'g', 'dddd', 'Yes', 'Yes', 'Yes', 'dgdggggg', 'Yes', 'fdgggg', 'Yes', 'Yes', 'Yes', 'fdgggg', '8609795396', 0, '2018-08-20 11:35:10'),
(22, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '6261893266', 0, '2022-03-04 08:40:31'),
(21, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '5024515514', 0, '2022-02-21 11:41:54');

-- --------------------------------------------------------

--
-- Table structure for table `mortgage_property`
--

CREATE TABLE `mortgage_property` (
  `id` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `postcode` varchar(200) NOT NULL,
  `client_propertytype` varchar(200) NOT NULL,
  `client_propertytenure` varchar(200) NOT NULL,
  `no_of_bedrooms` varchar(200) NOT NULL,
  `no_of_bathroom` varchar(200) NOT NULL,
  `no_of_wc` varchar(200) NOT NULL,
  `no_of_livingroom` varchar(200) NOT NULL,
  `no_of_kitchen` varchar(200) NOT NULL,
  `other_type` varchar(200) NOT NULL,
  `no_of_othertype` varchar(200) NOT NULL,
  `local_authority` varchar(200) NOT NULL,
  `year_built` varchar(200) NOT NULL,
  `building_guarantee` varchar(200) NOT NULL,
  `term_remaining` varchar(200) NOT NULL,
  `ground_rent` varchar(200) NOT NULL,
  `service_charge` varchar(200) NOT NULL,
  `standard_construction` varchar(200) NOT NULL,
  `the_flat` varchar(200) NOT NULL,
  `commercial_property` varchar(200) NOT NULL,
  `joint_purchase` varchar(200) NOT NULL,
  `to_date_client1` varchar(200) NOT NULL,
  `to_date_client2` varchar(200) NOT NULL,
  `living_at` varchar(200) NOT NULL,
  `full_names` varchar(200) NOT NULL,
  `of_completion` varchar(200) NOT NULL,
  `notes` text NOT NULL,
  `form_id` varchar(200) NOT NULL,
  `form_status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mortgage_property`
--

INSERT INTO `mortgage_property` (`id`, `address`, `postcode`, `client_propertytype`, `client_propertytenure`, `no_of_bedrooms`, `no_of_bathroom`, `no_of_wc`, `no_of_livingroom`, `no_of_kitchen`, `other_type`, `no_of_othertype`, `local_authority`, `year_built`, `building_guarantee`, `term_remaining`, `ground_rent`, `service_charge`, `standard_construction`, `the_flat`, `commercial_property`, `joint_purchase`, `to_date_client1`, `to_date_client2`, `living_at`, `full_names`, `of_completion`, `notes`, `form_id`, `form_status`, `created_at`) VALUES
(2, 'asass', 'sw14 7dh', 'Flat', 'Freehold', '2', '2', '1', '1', '1', '', '', 'Yes', '2014', 'edesd', '2', '1000', '200', 'Yes', '2', 'Yes', 'Joint_Tenants', 'Yes', '', 'Yes', 'sass', 'Yes', '', '3594043122', 0, '2018-07-22 12:14:49'),
(3, 'gdgdf', 'sw14 7dh', 'Flat', 'Flat', '2', '2', '1', '1', '1', '', '', 'Yes', '2014', 'edesd', '3', '1000', '200', 'Yes', '2', 'Yes', 'Joint_Tenants', 'Yes', '', 'Yes', 'fdsfdf', 'Yes', 'sfdsdfdf', '8609795396', 0, '2018-08-20 11:29:52'),
(22, '10, Berrycroft Drive', 'TW11 4PQ', 'Semi Detached', 'Freehold', '3', '2', '2', '1', '1', '', '', 'No', '1930', '', '', '', '', 'Yes', '', '', 'Joint_Tenants', '', '', 'No', '', 'Yes', '', '5024515514', 0, '2022-02-21 11:40:40');

-- --------------------------------------------------------

--
-- Table structure for table `other-income`
--

CREATE TABLE `other-income` (
  `id` int(11) NOT NULL,
  `form_id` varchar(200) NOT NULL,
  `client_rentalincome_1` varchar(200) NOT NULL,
  `client_rentalincome_2` varchar(200) NOT NULL,
  `client_childbenefit_1` varchar(200) NOT NULL,
  `client_childbenefit_2` varchar(200) NOT NULL,
  `client_workingtaxcredit_1` varchar(200) NOT NULL,
  `client_workingtaxcredit_2` varchar(200) NOT NULL,
  `client_childtaxcredit_1` varchar(200) NOT NULL,
  `client_childtaxcredit_2` varchar(200) NOT NULL,
  `client_disbenefit_1` varchar(200) NOT NULL,
  `client_disbenefit_2` varchar(200) NOT NULL,
  `client_statepension_1` varchar(200) NOT NULL,
  `client_statepension_2` varchar(200) NOT NULL,
  `client_privatepension_1` varchar(200) NOT NULL,
  `client_privatepension_2` varchar(200) NOT NULL,
  `client_investment_1` varchar(200) NOT NULL,
  `client_investment_2` varchar(200) NOT NULL,
  `client_other_1` varchar(200) NOT NULL,
  `client_other_2` varchar(200) NOT NULL,
  `client_totalothergross_1` varchar(200) NOT NULL,
  `client_totalothergross_2` varchar(200) NOT NULL,
  `client_totalotherincomenet_1` varchar(200) NOT NULL,
  `client_totalotherincomenet_2` varchar(200) NOT NULL,
  `client_annualgrossincome_1` varchar(200) NOT NULL,
  `client_annualgrossincome_2` varchar(200) NOT NULL,
  `client_netmonthlyincome_1` varchar(200) NOT NULL,
  `client_netmonthlyincome_2` varchar(200) NOT NULL,
  `client_incomeexpt_1` varchar(200) NOT NULL,
  `client_incomeexpt_2` varchar(200) NOT NULL,
  `client_statepensionage_1` varchar(200) NOT NULL,
  `client_statepensionage_2` varchar(200) NOT NULL,
  `client_exretireage_1` varchar(200) NOT NULL,
  `client_exretireage_2` varchar(200) NOT NULL,
  `client_exretireincome_1` varchar(200) NOT NULL,
  `client_exretireincome_2` varchar(200) NOT NULL,
  `client_additionalnotes` varchar(1000) NOT NULL,
  `form_status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `other-income`
--

INSERT INTO `other-income` (`id`, `form_id`, `client_rentalincome_1`, `client_rentalincome_2`, `client_childbenefit_1`, `client_childbenefit_2`, `client_workingtaxcredit_1`, `client_workingtaxcredit_2`, `client_childtaxcredit_1`, `client_childtaxcredit_2`, `client_disbenefit_1`, `client_disbenefit_2`, `client_statepension_1`, `client_statepension_2`, `client_privatepension_1`, `client_privatepension_2`, `client_investment_1`, `client_investment_2`, `client_other_1`, `client_other_2`, `client_totalothergross_1`, `client_totalothergross_2`, `client_totalotherincomenet_1`, `client_totalotherincomenet_2`, `client_annualgrossincome_1`, `client_annualgrossincome_2`, `client_netmonthlyincome_1`, `client_netmonthlyincome_2`, `client_incomeexpt_1`, `client_incomeexpt_2`, `client_statepensionage_1`, `client_statepensionage_2`, `client_exretireage_1`, `client_exretireage_2`, `client_exretireincome_1`, `client_exretireincome_2`, `client_additionalnotes`, `form_status`, `created_at`) VALUES
(2, '3594043122', '10000', '20000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '10,000.00', '20,000.00', '', '', '33,000.00', '34,000.00', '2,750.00', '2,833.33', 'Yes', 'Yes', '60', '60', '65', '65', '15000', '15000', '', 1, '2018-07-22 11:29:42'),
(3, '9288921029', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '0.00', '1.00', '', '', '2,467.00', '13578', '0', '0', '', '', '', '', '', '', '', '', '', 1, '2018-07-24 17:26:48'),
(4, '6992747539', '1234', '', '1234', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2,468.00', '', '1232', '', '2468', '', '1,232.00', '', '', '', '', '', '', '', '', '', '', 1, '2018-08-19 12:51:32'),
(5, '9640022942', '123', '12', '12', '12', '21', '12', '12', '12', '12', '12', '12', '12', '12', '12', '12', '12', '121', '12', '337.00', '108.00', '12344', '12332', '337.00', '108.00', '12,344.00', '12,332.00', '', '', '', '', '', '', '', '', '', 0, '2018-08-19 13:33:02'),
(6, '8609795396', '120000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '120,000.00', '', '10000', '', '360,000.00', '', '30,000.00', '', 'Yes', '', '65', '', '23', '', '50000', '', '', 0, '2018-08-20 09:40:06');

-- --------------------------------------------------------

--
-- Table structure for table `personal_detail`
--

CREATE TABLE `personal_detail` (
  `id` int(11) NOT NULL,
  `form_id` varchar(200) NOT NULL,
  `client_title_1` varchar(200) NOT NULL,
  `client_othertitle_1` varchar(200) NOT NULL,
  `client_title_2` varchar(200) NOT NULL,
  `client_othertitle_2` varchar(200) NOT NULL,
  `client_firstname_1` varchar(200) NOT NULL,
  `client_firstname_2` varchar(200) NOT NULL,
  `client_middlename_1` varchar(200) NOT NULL,
  `client_middlename_2` varchar(200) NOT NULL,
  `client_surname_1` varchar(200) NOT NULL,
  `client_surname_2` varchar(200) NOT NULL,
  `client_maidenname_1` varchar(200) NOT NULL,
  `client_maidenname_2` varchar(200) NOT NULL,
  `client_address_1` varchar(200) NOT NULL,
  `client_address_2` varchar(200) NOT NULL,
  `client_postcode_1` varchar(200) NOT NULL,
  `client_postcode_2` varchar(200) NOT NULL,
  `client_gender_1` varchar(200) NOT NULL,
  `client_gender_2` varchar(200) NOT NULL,
  `client_dob_1` varchar(200) NOT NULL,
  `client_dob_2` varchar(200) NOT NULL,
  `client_hometel_1` varchar(200) NOT NULL,
  `client_hometel_2` varchar(200) NOT NULL,
  `client_mobile_1` varchar(200) NOT NULL,
  `client_mobile_2` varchar(200) NOT NULL,
  `client_worktel_1` varchar(200) NOT NULL,
  `client_worktel_2` varchar(200) NOT NULL,
  `client_email_1` varchar(200) NOT NULL,
  `client_email_2` varchar(200) NOT NULL,
  `client_contactmethod_1` varchar(200) NOT NULL,
  `client_othercontactmethod_1` varchar(200) NOT NULL,
  `client_contactmethod_2` varchar(200) NOT NULL,
  `client_othercontactmethod_2` varchar(200) NOT NULL,
  `client_contacttime_1` varchar(200) NOT NULL,
  `client_contacttime_2` varchar(200) NOT NULL,
  `client_marital_1` varchar(200) NOT NULL,
  `client_marital_2` varchar(200) NOT NULL,
  `client_relationship_1` varchar(200) NOT NULL,
  `client_otherrelationship_1` varchar(200) NOT NULL,
  `client_relationship_2` varchar(200) NOT NULL,
  `client_otherrelationship_2` varchar(200) NOT NULL,
  `client_taxrate_1` varchar(200) NOT NULL,
  `client_taxrate_2` varchar(200) NOT NULL,
  `client_nationality_1` varchar(200) NOT NULL,
  `client_othernationality_1` varchar(200) NOT NULL,
  `client_nationality_2` varchar(200) NOT NULL,
  `client_othernationality_2` varchar(200) NOT NULL,
  `client_country_1` varchar(200) NOT NULL,
  `client_othercountry_1` varchar(200) NOT NULL,
  `client_country_2` varchar(200) NOT NULL,
  `client_othercountry_2` varchar(200) NOT NULL,
  `client_currentmoveddate_1` varchar(200) NOT NULL,
  `client_currentmoveddate_2` varchar(200) NOT NULL,
  `client_residentialstatus_1` varchar(200) NOT NULL,
  `client_otherresidentialstatus_1` varchar(200) NOT NULL,
  `client_residentialstatus_2` varchar(200) NOT NULL,
  `client_otherresidentialstatus_2` varchar(200) NOT NULL,
  `client_electoralroll_1` varchar(200) NOT NULL,
  `client_electoralroll_2` varchar(200) NOT NULL,
  `client_currentrenting_1` varchar(200) NOT NULL,
  `client_currentrentingtype_1` varchar(200) NOT NULL,
  `client_currentrenting_2` varchar(200) NOT NULL,
  `client_currentrentingtype_2` varchar(200) NOT NULL,
  `client_rentalaccom_1` varchar(200) NOT NULL,
  `client_rentalaccom_2` varchar(200) NOT NULL,
  `client_previousaddress` varchar(2500) NOT NULL,
  `client_childrensection` varchar(2500) NOT NULL,
  `client_healthstatus_1` varchar(200) NOT NULL,
  `client_healthstatus_2` varchar(200) NOT NULL,
  `client_religiousbelief_1` varchar(200) NOT NULL,
  `client_religiousbelief_2` varchar(200) NOT NULL,
  `client_additionaldetail` varchar(1000) NOT NULL,
  `form_status` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_detail`
--

INSERT INTO `personal_detail` (`id`, `form_id`, `client_title_1`, `client_othertitle_1`, `client_title_2`, `client_othertitle_2`, `client_firstname_1`, `client_firstname_2`, `client_middlename_1`, `client_middlename_2`, `client_surname_1`, `client_surname_2`, `client_maidenname_1`, `client_maidenname_2`, `client_address_1`, `client_address_2`, `client_postcode_1`, `client_postcode_2`, `client_gender_1`, `client_gender_2`, `client_dob_1`, `client_dob_2`, `client_hometel_1`, `client_hometel_2`, `client_mobile_1`, `client_mobile_2`, `client_worktel_1`, `client_worktel_2`, `client_email_1`, `client_email_2`, `client_contactmethod_1`, `client_othercontactmethod_1`, `client_contactmethod_2`, `client_othercontactmethod_2`, `client_contacttime_1`, `client_contacttime_2`, `client_marital_1`, `client_marital_2`, `client_relationship_1`, `client_otherrelationship_1`, `client_relationship_2`, `client_otherrelationship_2`, `client_taxrate_1`, `client_taxrate_2`, `client_nationality_1`, `client_othernationality_1`, `client_nationality_2`, `client_othernationality_2`, `client_country_1`, `client_othercountry_1`, `client_country_2`, `client_othercountry_2`, `client_currentmoveddate_1`, `client_currentmoveddate_2`, `client_residentialstatus_1`, `client_otherresidentialstatus_1`, `client_residentialstatus_2`, `client_otherresidentialstatus_2`, `client_electoralroll_1`, `client_electoralroll_2`, `client_currentrenting_1`, `client_currentrentingtype_1`, `client_currentrenting_2`, `client_currentrentingtype_2`, `client_rentalaccom_1`, `client_rentalaccom_2`, `client_previousaddress`, `client_childrensection`, `client_healthstatus_1`, `client_healthstatus_2`, `client_religiousbelief_1`, `client_religiousbelief_2`, `client_additionaldetail`, `form_status`, `created_at`) VALUES
(10, '5449908048', 'Mr', '', 'Mr', '', 'Sajal', '', '', '', 'Suraj', '', '', '', '', '', '', '', 'Male', 'Male', '05/08/1998', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '//', '//', '', '', '', '', '', '', '', 'per month', '', 'per month', '', '', '[{\"client_prevaddress1_1\":\"\",\"client_prevaddress1_2\":\"\",\"client_prevpostcode1_1\":\"\",\"client_prevpostcode1_2\":\"\",\"client_prevmovedindate1_1\":\"//\",\"client_prevmovedindate1_2\":\"//\",\"client_prevmovedoutdate1_1\":\"//\",\"client_prevmovedoutdate1_2\":\"//\",\"client_otherpreviousresidence1_1\":\"\",\"client_otherpreviousresidence1_2\":\"\"},{\"client_prevaddress2_1\":\"\",\"client_prevaddress2_2\":\"\",\"client_prevpostcode2_1\":\"\",\"client_prevpostcode2_2\":\"\",\"client_prevmovedindate2_1\":\"//\",\"client_prevmovedindate2_2\":\"//\",\"client_prevmovedoutdate2_1\":\"//\",\"client_prevmovedoutdate2_2\":\"//\",\"client_otherpreviousresidence2_1\":\"\",\"client_otherpreviousresidence2_2\":\"\"}]', '[{\"dependent_upon_1\":\"\",\"dependent_name_1\":\"\",\"client_dependentage_1\":\"\",\"relationship_1\":\"\",\"client_anticipitated_1\":\"\"},{\"dependent_upon_2\":\"\",\"dependent_name_2\":\"\",\"client_dependentage_2\":\"\",\"relationship_2\":\"\",\"client_anticipitated_2\":\"\"},{\"dependent_upon_3\":\"\",\"dependent_name_3\":\"\",\"client_dependentage_3\":\"\",\"relationship_3\":\"\",\"client_anticipitated_3\":\"\"},{\"dependent_upon_4\":\"\",\"dependent_name_4\":\"\",\"client_dependentage_4\":\"\",\"relationship_4\":\"\",\"client_anticipitated_4\":\"\"},{\"dependent_upon_5\":\"\",\"dependent_name_5\":\"\",\"client_dependentage_5\":\"\",\"relationship_5\":\"\",\"client_anticipitated_5\":\"\"}]', '', '', '', '', '', '1', '2018-07-22 10:14:38'),
(11, '3594043122', 'Miss', '', 'Miss', '', 'Kopal', 'Kritika', '', '', 'Tandon', 'Tandon', '', '', 'dfdfffdd', 'dfdfffdd', '12345', '12345', 'Female', 'Female', '01/04/1988', '21/07/1991', '', '', '07777777777', '77777777777', '', '', 'tandonkopal01@gmail.com', 'tandonkopal01@gmail.com', 'Telephone,Email', '', 'Telephone,Email', '', 'Daytime', 'Daytime', 'Single', 'Single', 'Other', 'Sister', 'Other', 'Sister', '40%', '40%', 'British', '', 'British', '', 'United Kingdom', '', 'United Kingdom', '', '01/07/2018', '01/07/2018', 'Tenant', '', 'Tenant', '', 'Yes', '', '2000', 'per month', '', 'per month', 'Yes', 'Yes', '[{\"client_prevaddress1_1\":\"14 floor london\",\"client_prevaddress1_2\":\"14 floor london\",\"client_prevpostcode1_1\":\"TW123\",\"client_prevpostcode1_2\":\"TW123\",\"client_prevmovedindate1_1\":\"20/07/2015\",\"client_prevmovedindate1_2\":\"20/07/2015\",\"client_prevmovedoutdate1_1\":\"01/07/2018\",\"client_prevmovedoutdate1_2\":\"01/07/2018\",\"client_otherpreviousresidence1_1\":\"\",\"client_otherpreviousresidence1_2\":\"\"},{\"client_prevaddress2_1\":\"\",\"client_prevaddress2_2\":\"\",\"client_prevpostcode2_1\":\"\",\"client_prevpostcode2_2\":\"\",\"client_prevmovedindate2_1\":\"//\",\"client_prevmovedindate2_2\":\"//\",\"client_prevmovedoutdate2_1\":\"//\",\"client_prevmovedoutdate2_2\":\"20/07/2015\",\"client_otherpreviousresidence2_1\":\"\",\"client_otherpreviousresidence2_2\":\"\"}]', '[{\"dependent_upon_1\":\"Joint\",\"dependent_name_1\":\"Shivam Tandon\",\"client_dependentage_1\":\"18\",\"relationship_1\":\"Brother\",\"client_FinanciallyDependent_1\":\"Yes\",\"client_anticipitated_1\":\"3\"},{\"dependent_upon_2\":\"\",\"dependent_name_2\":\"\",\"client_dependentage_2\":\"\",\"relationship_2\":\"\",\"client_anticipitated_2\":\"\"},{\"dependent_upon_3\":\"\",\"dependent_name_3\":\"\",\"client_dependentage_3\":\"\",\"relationship_3\":\"\",\"client_anticipitated_3\":\"\"},{\"dependent_upon_4\":\"\",\"dependent_name_4\":\"\",\"client_dependentage_4\":\"\",\"relationship_4\":\"\",\"client_anticipitated_4\":\"\"},{\"dependent_upon_5\":\"\",\"dependent_name_5\":\"\",\"client_dependentage_5\":\"\",\"relationship_5\":\"\",\"client_anticipitated_5\":\"\"}]', 'Yes', 'Yes', '', '', '', '', '2018-07-22 11:26:09'),
(12, '3547550203', 'Mr', '', 'Mr', '', 'Test1', 'Test2', '', '', 'testsur', 'Testsur', '', '', 'fjhdgjdf', 'ggjnhcfjnf', '', '', 'Male', 'Male', '//', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Daughter', '', 'Mother', '', '', '', '', '', '', '', '', '', '', '', '19/07/2016', '05/07/2016', '', '', '', '', '', '', '', 'per month', '', 'per month', '', '', '[{\"client_prevaddress1_1\":\"gdghgnhj\",\"client_prevaddress1_2\":\"dgjhdgjh\",\"client_prevpostcode1_1\":\"123455\",\"client_prevpostcode1_2\":\"12345667\",\"client_prevmovedindate1_1\":\"09/07/2015\",\"client_prevmovedindate1_2\":\"01/07/2015\",\"client_prevmovedoutdate1_1\":\"19/07/2016\",\"client_prevmovedoutdate1_2\":\"05/07/2016\",\"client_otherpreviousresidence1_1\":\"\",\"client_otherpreviousresidence1_2\":\"\"},{\"client_prevaddress2_1\":\"\",\"client_prevaddress2_2\":\"\",\"client_prevpostcode2_1\":\"\",\"client_prevpostcode2_2\":\"\",\"client_prevmovedindate2_1\":\"01/07/2013\",\"client_prevmovedindate2_2\":\"01/07/2013\",\"client_prevmovedoutdate2_1\":\"09/07/2015\",\"client_prevmovedoutdate2_2\":\"01/07/2015\",\"client_otherpreviousresidence2_1\":\"\",\"client_otherpreviousresidence2_2\":\"\"}]', '[{\"dependent_upon_1\":\"Joint,CL1\",\"dependent_name_1\":\"\",\"client_dependentage_1\":\"12\",\"relationship_1\":\"\",\"client_FinanciallyDependent_1\":\"Yes\",\"client_anticipitated_1\":\"9\"},{\"dependent_upon_2\":\"Joint,CL1\",\"dependent_name_2\":\"\",\"client_dependentage_2\":\"\",\"relationship_2\":\"\",\"client_anticipitated_2\":\"\"},{\"dependent_upon_3\":\"CL2\",\"dependent_name_3\":\"\",\"client_dependentage_3\":\"\",\"relationship_3\":\"\",\"client_anticipitated_3\":\"\"},{\"dependent_upon_4\":\"\",\"dependent_name_4\":\"\",\"client_dependentage_4\":\"\",\"relationship_4\":\"\",\"client_anticipitated_4\":\"\"},{\"dependent_upon_5\":\"\",\"dependent_name_5\":\"\",\"client_dependentage_5\":\"\",\"relationship_5\":\"\",\"client_anticipitated_5\":\"\"}]', 'Yes', 'No', 'Yes', 'No', 'gehgjhh', '', '2018-07-23 15:46:51'),
(13, '9288921029', 'Mr', '', 'Mr', '', 'TestNew', 'TestNew2', 'a', 'a', 'TestNewSurname', 'TestNewSurname2', 'b', 'b', 'Bangalore', 'Mumbai', '123456', '123456', 'Male', 'Female', '01/07/1994', '04/07/1990', '12344566712', '12344566712', '21355677889', '12345671234', '12345567889', '21345654333', 'sajal.suraj@gmail.com', 'abc@gmail.com', 'Letter,Telephone', '', 'Telephone,Email', '', '7:00 PM', '7:00 PM', 'Single', 'Single', 'Civil Partner', '', 'Civil Partner', '', '20%', '40%', 'British', '', 'British', '', 'United Kingdom', '', 'United Kingdom', '', '11/01/2010', '13/07/2010', 'Owner', '', 'Tenant', '', 'Yes', 'Yes', '', 'per month', '', 'per month', '', '', '[{\"client_prevaddress1_1\":\"hghfgfyhi\",\"client_prevaddress1_2\":\"Mumabi\",\"client_prevpostcode1_1\":\"\",\"client_prevpostcode1_2\":\"123\",\"client_prevmovedindate1_1\":\"04/07/2017\",\"client_prevmovedindate1_2\":\"07/07/2010\",\"client_prevmovedoutdate1_1\":\"01/01/2018\",\"client_prevmovedoutdate1_2\":\"23/07/2018\",\"client_otherpreviousresidence1_1\":\"\",\"client_otherpreviousresidence1_2\":\"\"},{\"client_prevaddress2_1\":\"\",\"client_prevaddress2_2\":\"\",\"client_prevpostcode2_1\":\"\",\"client_prevpostcode2_2\":\"\",\"client_prevmovedindate2_1\":\"//\",\"client_prevmovedindate2_2\":\"//\",\"client_prevmovedoutdate2_1\":\"04/07/2017\",\"client_prevmovedoutdate2_2\":\"11/07/2018\",\"client_otherpreviousresidence2_1\":\"\",\"client_otherpreviousresidence2_2\":\"\"}]', '[{\"dependent_upon_1\":\"Joint\",\"dependent_name_1\":\"abc\",\"client_dependentage_1\":\"12\",\"relationship_1\":\"brother\",\"client_FinanciallyDependent_1\":\"Yes\",\"client_anticipitated_1\":\"9\"},{\"dependent_upon_2\":\"Joint\",\"dependent_name_2\":\"abc2\",\"client_dependentage_2\":\"12\",\"relationship_2\":\"cvc\",\"client_FinanciallyDependent_2\":\"Yes\",\"client_anticipitated_2\":\"9\"},{\"dependent_upon_3\":\"CL1\",\"dependent_name_3\":\"sfvfs\",\"client_dependentage_3\":\"23\",\"relationship_3\":\"fvf\",\"client_FinanciallyDependent_3\":\"Yes\",\"client_anticipitated_3\":\"0\"},{\"dependent_upon_4\":\"CL2\",\"dependent_name_4\":\"fvfsv\",\"client_dependentage_4\":\"45\",\"relationship_4\":\"fv\",\"client_FinanciallyDependent_4\":\"Yes\",\"client_anticipitated_4\":\"0\"},{\"dependent_upon_5\":\"Joint\",\"dependent_name_5\":\"fvfv\",\"client_dependentage_5\":\"12\",\"relationship_5\":\"fv\",\"client_FinanciallyDependent_5\":\"Yes\",\"client_anticipitated_5\":\"9\"}]', 'Yes', 'No', 'Yes', 'Yes', 'Description', '', '2018-07-23 16:10:19'),
(14, '8517020601', 'Mr', '', 'Mr', '', 'fjh', 'gh', 'fjh', 'gh', 'jh', 'gh', '', '', '', '', '', '', 'Male', 'Male', '//', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '//', '//', '', '', '', '', '', '', '', 'per month', '', 'per month', '', '', '[{\"client_prevaddress1_1\":\"\",\"client_prevaddress1_2\":\"\",\"client_prevpostcode1_1\":\"\",\"client_prevpostcode1_2\":\"\",\"client_prevmovedindate1_1\":\"//\",\"client_prevmovedindate1_2\":\"//\",\"client_prevmovedoutdate1_1\":\"//\",\"client_prevmovedoutdate1_2\":\"//\",\"client_otherpreviousresidence1_1\":\"\",\"client_otherpreviousresidence1_2\":\"\"},{\"client_prevaddress2_1\":\"\",\"client_prevaddress2_2\":\"\",\"client_prevpostcode2_1\":\"\",\"client_prevpostcode2_2\":\"\",\"client_prevmovedindate2_1\":\"//\",\"client_prevmovedindate2_2\":\"//\",\"client_prevmovedoutdate2_1\":\"//\",\"client_prevmovedoutdate2_2\":\"//\",\"client_otherpreviousresidence2_1\":\"\",\"client_otherpreviousresidence2_2\":\"\"}]', '[{\"dependent_upon_1\":\"\",\"dependent_name_1\":\"\",\"client_dependentage_1\":\"\",\"relationship_1\":\"\",\"client_anticipitated_1\":\"\"},{\"dependent_upon_2\":\"\",\"dependent_name_2\":\"\",\"client_dependentage_2\":\"\",\"relationship_2\":\"\",\"client_anticipitated_2\":\"\"},{\"dependent_upon_3\":\"\",\"dependent_name_3\":\"\",\"client_dependentage_3\":\"\",\"relationship_3\":\"\",\"client_anticipitated_3\":\"\"},{\"dependent_upon_4\":\"\",\"dependent_name_4\":\"\",\"client_dependentage_4\":\"\",\"relationship_4\":\"\",\"client_anticipitated_4\":\"\"},{\"dependent_upon_5\":\"\",\"dependent_name_5\":\"\",\"client_dependentage_5\":\"\",\"relationship_5\":\"\",\"client_anticipitated_5\":\"\"}]', '', '', '', '', '', '', '2018-08-06 18:46:34'),
(15, '9640022942', 'Mr', '', 'Mrs', '', 'Sajal', '', '', '', 'Suraj New', '', '', '', '', '', '', '', 'Male', 'Male', '//', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '//', '//', '', '', '', '', '', '', '', 'per month', '', 'per month', '', '', '[{\"client_prevaddress1_1\":\"\",\"client_prevaddress1_2\":\"\",\"client_prevpostcode1_1\":\"\",\"client_prevpostcode1_2\":\"\",\"client_prevmovedindate1_1\":\"//\",\"client_prevmovedindate1_2\":\"//\",\"client_prevmovedoutdate1_1\":\"//\",\"client_prevmovedoutdate1_2\":\"//\",\"client_otherpreviousresidence1_1\":\"\",\"client_otherpreviousresidence1_2\":\"\"},{\"client_prevaddress2_1\":\"\",\"client_prevaddress2_2\":\"\",\"client_prevpostcode2_1\":\"\",\"client_prevpostcode2_2\":\"\",\"client_prevmovedindate2_1\":\"//\",\"client_prevmovedindate2_2\":\"//\",\"client_prevmovedoutdate2_1\":\"//\",\"client_prevmovedoutdate2_2\":\"//\",\"client_otherpreviousresidence2_1\":\"\",\"client_otherpreviousresidence2_2\":\"\"}]', '[{\"dependent_upon_1\":\"\",\"dependent_name_1\":\"\",\"client_dependentage_1\":\"\",\"relationship_1\":\"\",\"client_anticipitated_1\":\"\"},{\"dependent_upon_2\":\"\",\"dependent_name_2\":\"\",\"client_dependentage_2\":\"\",\"relationship_2\":\"\",\"client_anticipitated_2\":\"\"},{\"dependent_upon_3\":\"\",\"dependent_name_3\":\"\",\"client_dependentage_3\":\"\",\"relationship_3\":\"\",\"client_anticipitated_3\":\"\"},{\"dependent_upon_4\":\"\",\"dependent_name_4\":\"\",\"client_dependentage_4\":\"\",\"relationship_4\":\"\",\"client_anticipitated_4\":\"\"},{\"dependent_upon_5\":\"\",\"dependent_name_5\":\"\",\"client_dependentage_5\":\"\",\"relationship_5\":\"\",\"client_anticipitated_5\":\"\"}]', '', '', '', '', '', '', '2018-08-18 19:06:44'),
(16, '6992747539', '', '', '', '', 'Single ', '', '', '', 'Test', '', '', '', '', '', '', '', 'Male', '', '//', 'undefined/undefined/undefined', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '//', 'undefined/undefined/undefined', '', '', '', '', '', '', '', 'per month', '', '', '', '', '[{\"client_prevaddress1_1\":\"\",\"client_prevpostcode1_1\":\"\",\"client_prevmovedindate1_1\":\"//\",\"client_prevmovedindate1_2\":\"undefined/undefined/undefined\",\"client_prevmovedoutdate1_1\":\"//\",\"client_prevmovedoutdate1_2\":\"undefined/undefined/undefined\",\"client_otherpreviousresidence1_1\":\"\"},{\"client_prevaddress2_1\":\"\",\"client_prevpostcode2_1\":\"\",\"client_prevmovedindate2_1\":\"//\",\"client_prevmovedindate2_2\":\"undefined/undefined/undefined\",\"client_prevmovedoutdate2_1\":\"//\",\"client_prevmovedoutdate2_2\":\"undefined/undefined/undefined\",\"client_otherpreviousresidence2_1\":\"\"}]', '[{\"dependent_upon_1\":\"\",\"dependent_name_1\":\"\",\"client_dependentage_1\":\"\",\"relationship_1\":\"\",\"client_anticipitated_1\":\"\"},{\"dependent_upon_2\":\"\",\"dependent_name_2\":\"\",\"client_dependentage_2\":\"\",\"relationship_2\":\"\",\"client_anticipitated_2\":\"\"},{\"dependent_upon_3\":\"\",\"dependent_name_3\":\"\",\"client_dependentage_3\":\"\",\"relationship_3\":\"\",\"client_anticipitated_3\":\"\"},{\"dependent_upon_4\":\"\",\"dependent_name_4\":\"\",\"client_dependentage_4\":\"\",\"relationship_4\":\"\",\"client_anticipitated_4\":\"\"},{\"dependent_upon_5\":\"\",\"dependent_name_5\":\"\",\"client_dependentage_5\":\"\",\"relationship_5\":\"\",\"client_anticipitated_5\":\"\"}]', '', '', '', '', '', '', '2018-08-19 08:00:03'),
(17, '8609795396', 'Miss', '', '', '', 'Kopal', '', '', '', 'Tandon', '', '', '', 'djfsdkjfkls', '', 'tw123', '', 'Female', '', '01/04/1988', 'undefined/undefined/undefined', '', '', '77777777777', '', '', '', 'tandonkopal01@gmail.com', '', 'Email', '', '', '', 'Daytime', '', 'Single', '', '', '', '', '', '20%', '', 'British', '', '', '', 'United Kingdom', '', '', '', '09/08/2017', 'undefined/undefined/undefined', 'Owner', '', '', '', 'Yes', '', '2000', 'per month', '', '', 'Yes', '', '[{\"client_prevaddress1_1\":\"fdgfghfh\",\"client_prevpostcode1_1\":\"tw356\",\"client_prevmovedindate1_1\":\"10/08/2016\",\"client_prevmovedindate1_2\":\"undefined/undefined/undefined\",\"client_prevmovedoutdate1_1\":\"09/08/2017\",\"client_prevmovedoutdate1_2\":\"undefined/undefined/undefined\",\"client_previousResidence1_1\":\"Tenant\",\"client_otherpreviousresidence1_1\":\"\",\"client_prelectoralRoll1_1\":\"Yes\"},{\"client_prevaddress2_1\":\"dffgfgfgh\",\"client_prevpostcode2_1\":\"1234\",\"client_prevmovedindate2_1\":\"11/08/2015\",\"client_prevmovedindate2_2\":\"undefined/undefined/undefined\",\"client_prevmovedoutdate2_1\":\"10/08/2016\",\"client_prevmovedoutdate2_2\":\"undefined/undefined/undefined\",\"client_previousResidence2_1\":\"Tenant\",\"client_otherpreviousresidence2_1\":\"\",\"client_prelectoralRoll2_1\":\"Yes\"},{\"client_prevaddress3_1\":\"ghfgh\",\"client_prevaddress3_2\":\"\",\"client_prevpostcode3_1\":\"2345\",\"client_prevpostcode3_2\":\"\",\"client_prevmovedindate3_1\":\"01/08/2014\",\"client_prevmovedindate3_2\":\"//\",\"client_prevmovedoutdate3_1\":\"11/08/2015\",\"client_prevmovedoutdate3_2\":\"//\",\"client_previousResidence3_1\":\"Tenant\",\"client_otherpreviousresidence3_1\":\"\",\"client_otherpreviousresidence3_2\":\"\"}]', '[{\"dependent_upon_1\":\"CL1\",\"dependent_name_1\":\"shivam\",\"client_dependentage_1\":\"18\",\"relationship_1\":\"brother\",\"client_FinanciallyDependent_1\":\"Yes\",\"client_anticipitated_1\":\"3\"},{\"dependent_upon_2\":\"\",\"dependent_name_2\":\"\",\"client_dependentage_2\":\"\",\"relationship_2\":\"\",\"client_anticipitated_2\":\"\"},{\"dependent_upon_3\":\"\",\"dependent_name_3\":\"\",\"client_dependentage_3\":\"\",\"relationship_3\":\"\",\"client_anticipitated_3\":\"\"},{\"dependent_upon_4\":\"\",\"dependent_name_4\":\"\",\"client_dependentage_4\":\"\",\"relationship_4\":\"\",\"client_anticipitated_4\":\"\"},{\"dependent_upon_5\":\"\",\"dependent_name_5\":\"\",\"client_dependentage_5\":\"\",\"relationship_5\":\"\",\"client_anticipitated_5\":\"\"}]', 'Yes', '', 'Yes', '', '', '1', '2018-08-20 09:37:06'),
(19, '9921519822', '', '', '', '', 'Test single', '', '', '', 'Prev check', '', '', '', '', '', '', '', 'Male', '', '//', 'undefined/undefined/undefined', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '01/08/2017', 'undefined/undefined/undefined', '', '', '', '', '', '', '', 'per month', '', '', '', '', '[{\"client_prevaddress1_1\":\"\",\"client_prevpostcode1_1\":\"\",\"client_prevmovedindate1_1\":\"01/08/2016\",\"client_prevmovedindate1_2\":\"undefined/undefined/undefined\",\"client_prevmovedoutdate1_1\":\"01/08/2017\",\"client_prevmovedoutdate1_2\":\"undefined/undefined/undefined\",\"client_otherpreviousresidence1_1\":\"\"},{\"client_prevaddress2_1\":\"\",\"client_prevpostcode2_1\":\"\",\"client_prevmovedindate2_1\":\"01/08/2015\",\"client_prevmovedindate2_2\":\"undefined/undefined/undefined\",\"client_prevmovedoutdate2_1\":\"01/08/2016\",\"client_prevmovedoutdate2_2\":\"undefined/undefined/undefined\",\"client_otherpreviousresidence2_1\":\"\"},{\"client_prevaddress3_1\":\"\",\"client_prevaddress3_2\":\"\",\"client_prevpostcode3_1\":\"\",\"client_prevpostcode3_2\":\"\",\"client_prevmovedindate3_1\":\"01/08/2014\",\"client_prevmovedindate3_2\":\"//\",\"client_prevmovedoutdate3_1\":\"01/08/2015\",\"client_prevmovedoutdate3_2\":\"//\",\"client_otherpreviousresidence3_1\":\"\",\"client_otherpreviousresidence3_2\":\"\"}]', '[{\"dependent_upon_1\":\"\",\"dependent_name_1\":\"\",\"client_dependentage_1\":\"\",\"relationship_1\":\"\",\"client_anticipitated_1\":\"\"},{\"dependent_upon_2\":\"\",\"dependent_name_2\":\"\",\"client_dependentage_2\":\"\",\"relationship_2\":\"\",\"client_anticipitated_2\":\"\"},{\"dependent_upon_3\":\"\",\"dependent_name_3\":\"\",\"client_dependentage_3\":\"\",\"relationship_3\":\"\",\"client_anticipitated_3\":\"\"},{\"dependent_upon_4\":\"\",\"dependent_name_4\":\"\",\"client_dependentage_4\":\"\",\"relationship_4\":\"\",\"client_anticipitated_4\":\"\"},{\"dependent_upon_5\":\"\",\"dependent_name_5\":\"\",\"client_dependentage_5\":\"\",\"relationship_5\":\"\",\"client_anticipitated_5\":\"\"}]', '', '', '', '', '', '', '2018-08-22 20:24:35'),
(20, '5153447414', '', '', '', '', 'Test ', '', '', '', 'Fresh 1', '', '', '', '', '', '', '', 'Male', 'Male', '//', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '01/08/2014', '01/08/2018', '', '', '', '', '', '', '', 'per month', '', 'per month', '', '', '[{\"client_prevaddress1_1\":\"\",\"client_prevaddress1_2\":\"\",\"client_prevpostcode1_1\":\"\",\"client_prevpostcode1_2\":\"\",\"client_prevmovedindate1_1\":\"//\",\"client_prevmovedindate1_2\":\"01/08/2016\",\"client_prevmovedoutdate1_1\":\"//\",\"client_prevmovedoutdate1_2\":\"01/08/2018\",\"client_otherpreviousresidence1_1\":\"\",\"client_otherpreviousresidence1_2\":\"\"},{\"client_prevaddress2_1\":\"\",\"client_prevaddress2_2\":\"\",\"client_prevpostcode2_1\":\"\",\"client_prevpostcode2_2\":\"\",\"client_prevmovedindate2_1\":\"//\",\"client_prevmovedindate2_2\":\"01/08/2014\",\"client_prevmovedoutdate2_1\":\"//\",\"client_prevmovedoutdate2_2\":\"01/08/2016\",\"client_otherpreviousresidence2_1\":\"\",\"client_otherpreviousresidence2_2\":\"\"}]', '[{\"dependent_upon_1\":\"\",\"dependent_name_1\":\"\",\"client_dependentage_1\":\"\",\"relationship_1\":\"\",\"client_anticipitated_1\":\"\"},{\"dependent_upon_2\":\"\",\"dependent_name_2\":\"\",\"client_dependentage_2\":\"\",\"relationship_2\":\"\",\"client_anticipitated_2\":\"\"},{\"dependent_upon_3\":\"\",\"dependent_name_3\":\"\",\"client_dependentage_3\":\"\",\"relationship_3\":\"\",\"client_anticipitated_3\":\"\"},{\"dependent_upon_4\":\"\",\"dependent_name_4\":\"\",\"client_dependentage_4\":\"\",\"relationship_4\":\"\",\"client_anticipitated_4\":\"\"},{\"dependent_upon_5\":\"\",\"dependent_name_5\":\"\",\"client_dependentage_5\":\"\",\"relationship_5\":\"\",\"client_anticipitated_5\":\"\"}]', '', '', '', '', '', '', '2018-08-26 07:54:10'),
(27, '6388565252', '', '', '', '', 'Client', 'Client 2', '', '', 'Form', 'Form 2', '', '', '', '', '', '', 'Male', 'Male', '//', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '//', '//', '', '', '', '', '', '', '', 'per month', '', 'per month', '', '', '[{\"client_prevaddress1_1\":\"\",\"client_prevaddress1_2\":\"\",\"client_prevpostcode1_1\":\"\",\"client_prevpostcode1_2\":\"\",\"client_prevmovedindate1_1\":\"//\",\"client_prevmovedindate1_2\":\"//\",\"client_prevmovedoutdate1_1\":\"//\",\"client_prevmovedoutdate1_2\":\"//\",\"client_otherpreviousresidence1_1\":\"\",\"client_otherpreviousresidence1_2\":\"\"},{\"client_prevaddress2_1\":\"\",\"client_prevaddress2_2\":\"\",\"client_prevpostcode2_1\":\"\",\"client_prevpostcode2_2\":\"\",\"client_prevmovedindate2_1\":\"//\",\"client_prevmovedindate2_2\":\"//\",\"client_prevmovedoutdate2_1\":\"//\",\"client_prevmovedoutdate2_2\":\"//\",\"client_otherpreviousresidence2_1\":\"\",\"client_otherpreviousresidence2_2\":\"\"}]', '[{\"dependent_upon_1\":\"\",\"dependent_name_1\":\"\",\"client_dependentage_1\":\"\",\"relationship_1\":\"\",\"client_anticipitated_1\":\"\"},{\"dependent_upon_2\":\"\",\"dependent_name_2\":\"\",\"client_dependentage_2\":\"\",\"relationship_2\":\"\",\"client_anticipitated_2\":\"\"},{\"dependent_upon_3\":\"\",\"dependent_name_3\":\"\",\"client_dependentage_3\":\"\",\"relationship_3\":\"\",\"client_anticipitated_3\":\"\"},{\"dependent_upon_4\":\"\",\"dependent_name_4\":\"\",\"client_dependentage_4\":\"\",\"relationship_4\":\"\",\"client_anticipitated_4\":\"\"},{\"dependent_upon_5\":\"\",\"dependent_name_5\":\"\",\"client_dependentage_5\":\"\",\"relationship_5\":\"\",\"client_anticipitated_5\":\"\"}]', '', '', '', '', '', '', '2018-11-02 12:29:50'),
(45, '8965912610', 'Mr', '', 'Mrs', '', 'Test1', 'Test2', '', '', 'Surname1', 'Surname2', '', '', '123 ABC', '123 ABC', 'AB12 34RV', 'AB12 34RV', 'Male', 'Female', '03/09/2000', '02/09/2001', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '//', '//', '', '', '', '', '', '', '', 'per month', '', 'per month', '', '', '[{\"client_prevaddress1_1\":\"\",\"client_prevaddress1_2\":\"\",\"client_prevpostcode1_1\":\"\",\"client_prevpostcode1_2\":\"\",\"client_prevmovedindate1_1\":\"//\",\"client_prevmovedindate1_2\":\"//\",\"client_prevmovedoutdate1_1\":\"//\",\"client_prevmovedoutdate1_2\":\"//\",\"client_otherpreviousresidence1_1\":\"\",\"client_otherpreviousresidence1_2\":\"\"},{\"client_prevaddress2_1\":\"\",\"client_prevaddress2_2\":\"\",\"client_prevpostcode2_1\":\"\",\"client_prevpostcode2_2\":\"\",\"client_prevmovedindate2_1\":\"//\",\"client_prevmovedindate2_2\":\"//\",\"client_prevmovedoutdate2_1\":\"//\",\"client_prevmovedoutdate2_2\":\"//\",\"client_otherpreviousresidence2_1\":\"\",\"client_otherpreviousresidence2_2\":\"\"}]', '[{\"dependent_upon_1\":\"\",\"dependent_name_1\":\"\",\"client_dependentage_1\":\"\",\"relationship_1\":\"\",\"client_anticipitated_1\":\"\"},{\"dependent_upon_2\":\"\",\"dependent_name_2\":\"\",\"client_dependentage_2\":\"\",\"relationship_2\":\"\",\"client_anticipitated_2\":\"\"},{\"dependent_upon_3\":\"\",\"dependent_name_3\":\"\",\"client_dependentage_3\":\"\",\"relationship_3\":\"\",\"client_anticipitated_3\":\"\"},{\"dependent_upon_4\":\"\",\"dependent_name_4\":\"\",\"client_dependentage_4\":\"\",\"relationship_4\":\"\",\"client_anticipitated_4\":\"\"},{\"dependent_upon_5\":\"\",\"dependent_name_5\":\"\",\"client_dependentage_5\":\"\",\"relationship_5\":\"\",\"client_anticipitated_5\":\"\"}]', '', '', '', '', '', '', '2020-09-22 11:23:14'),
(47, '6261893266', 'Mr', '', 'Mrs', '', 'John', 'Kathy', '', '', 'Smith', 'Smith', '', '', '16 Test Address ', '16 Test Address ', 'AF56HU', 'AF56HU', 'Male', 'Female', '02/10/1994', '14/10/1996', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '//', '//', '', '', '', '', '', '', '', 'per month', '', 'per month', '', '', '[{\"client_prevaddress1_1\":\"\",\"client_prevaddress1_2\":\"\",\"client_prevpostcode1_1\":\"\",\"client_prevpostcode1_2\":\"\",\"client_prevmovedindate1_1\":\"//\",\"client_prevmovedindate1_2\":\"//\",\"client_prevmovedoutdate1_1\":\"//\",\"client_prevmovedoutdate1_2\":\"//\",\"client_otherpreviousresidence1_1\":\"\",\"client_otherpreviousresidence1_2\":\"\"},{\"client_prevaddress2_1\":\"\",\"client_prevaddress2_2\":\"\",\"client_prevpostcode2_1\":\"\",\"client_prevpostcode2_2\":\"\",\"client_prevmovedindate2_1\":\"//\",\"client_prevmovedindate2_2\":\"//\",\"client_prevmovedoutdate2_1\":\"//\",\"client_prevmovedoutdate2_2\":\"//\",\"client_otherpreviousresidence2_1\":\"\",\"client_otherpreviousresidence2_2\":\"\"}]', '[{\"dependent_upon_1\":\"\",\"dependent_name_1\":\"\",\"client_dependentage_1\":\"\",\"relationship_1\":\"\",\"client_anticipitated_1\":\"\"},{\"dependent_upon_2\":\"\",\"dependent_name_2\":\"\",\"client_dependentage_2\":\"\",\"relationship_2\":\"\",\"client_anticipitated_2\":\"\"},{\"dependent_upon_3\":\"\",\"dependent_name_3\":\"\",\"client_dependentage_3\":\"\",\"relationship_3\":\"\",\"client_anticipitated_3\":\"\"},{\"dependent_upon_4\":\"\",\"dependent_name_4\":\"\",\"client_dependentage_4\":\"\",\"relationship_4\":\"\",\"client_anticipitated_4\":\"\"},{\"dependent_upon_5\":\"\",\"dependent_name_5\":\"\",\"client_dependentage_5\":\"\",\"relationship_5\":\"\",\"client_anticipitated_5\":\"\"}]', '', '', '', '', '', '1', '2020-10-05 09:31:35'),
(48, '1271326003', 'Mr', '', '', '', 'First', '', '', '', 'Last Test', '', '', '', '', '', '', '', 'Male', '', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '//', '', '', '', '', '', '', '', '', 'per month', '', '', '', '', '[{\"client_prevaddress1_1\":\"\",\"client_prevpostcode1_1\":\"\",\"client_prevmovedindate1_1\":\"//\",\"client_prevmovedindate1_2\":\"undefined/undefined/undefined\",\"client_prevmovedoutdate1_1\":\"//\",\"client_prevmovedoutdate1_2\":\"undefined/undefined/undefined\",\"client_otherpreviousresidence1_1\":\"\"},{\"client_prevaddress2_1\":\"\",\"client_prevpostcode2_1\":\"\",\"client_prevmovedindate2_1\":\"//\",\"client_prevmovedindate2_2\":\"undefined/undefined/undefined\",\"client_prevmovedoutdate2_1\":\"//\",\"client_prevmovedoutdate2_2\":\"undefined/undefined/undefined\",\"client_otherpreviousresidence2_1\":\"\"}]', '[{\"dependent_upon_1\":\"\",\"dependent_name_1\":\"\",\"client_dependentage_1\":\"\",\"relationship_1\":\"\",\"client_anticipitated_1\":\"\"},{\"dependent_upon_2\":\"\",\"dependent_name_2\":\"\",\"client_dependentage_2\":\"\",\"relationship_2\":\"\",\"client_anticipitated_2\":\"\"},{\"dependent_upon_3\":\"\",\"dependent_name_3\":\"\",\"client_dependentage_3\":\"\",\"relationship_3\":\"\",\"client_anticipitated_3\":\"\"},{\"dependent_upon_4\":\"\",\"dependent_name_4\":\"\",\"client_dependentage_4\":\"\",\"relationship_4\":\"\",\"client_anticipitated_4\":\"\"},{\"dependent_upon_5\":\"\",\"dependent_name_5\":\"\",\"client_dependentage_5\":\"\",\"relationship_5\":\"\",\"client_anticipitated_5\":\"\"}]', '', '', '', '', '', '', '2020-10-05 09:44:44'),
(49, '9404682413', 'Mr', '', 'Mrs', '', 'Matthew ', 'Rebecca', '', 'Mary', 'Quinn', 'O\'Leary', '', '', '11 Address Line 1,\r\nAddress Line 2', '11 Address Line 1,\r\nAddress Line 2', 'AB12CD', 'AB12CD', 'Male', 'Female', '01/03/1975', '29/02/1980', '', '', '04455665464', '04477567849', '', '', 'm.q@yahoo.com', '', 'Telephone,Email', '', 'Text', '', '', '', 'Married', 'Married', 'Spouse', '', 'Spouse', '', '40%', '20%', 'British', '', 'Other', 'French', 'United Kingdom', '', 'United Kingdom', '', '01/10/2010', '19/04/2011', 'Owner', '', 'Owner', '', 'Yes', 'Yes', '', 'per month', '', 'per month', '', '', '[{\"client_prevaddress1_1\":\"\",\"client_prevaddress1_2\":\"\",\"client_prevpostcode1_1\":\"\",\"client_prevpostcode1_2\":\"\",\"client_prevmovedindate1_1\":\"//\",\"client_prevmovedindate1_2\":\"//\",\"client_prevmovedoutdate1_1\":\"//\",\"client_prevmovedoutdate1_2\":\"//\",\"client_otherpreviousresidence1_1\":\"\",\"client_otherpreviousresidence1_2\":\"\"},{\"client_prevaddress2_1\":\"\",\"client_prevaddress2_2\":\"\",\"client_prevpostcode2_1\":\"\",\"client_prevpostcode2_2\":\"\",\"client_prevmovedindate2_1\":\"//\",\"client_prevmovedindate2_2\":\"//\",\"client_prevmovedoutdate2_1\":\"//\",\"client_prevmovedoutdate2_2\":\"//\",\"client_otherpreviousresidence2_1\":\"\",\"client_otherpreviousresidence2_2\":\"\"}]', '[{\"dependent_upon_1\":\"\",\"dependent_name_1\":\"\",\"client_dependentage_1\":\"\",\"relationship_1\":\"\",\"client_anticipitated_1\":\"\"},{\"dependent_upon_2\":\"\",\"dependent_name_2\":\"\",\"client_dependentage_2\":\"\",\"relationship_2\":\"\",\"client_anticipitated_2\":\"\"},{\"dependent_upon_3\":\"\",\"dependent_name_3\":\"\",\"client_dependentage_3\":\"\",\"relationship_3\":\"\",\"client_anticipitated_3\":\"\"},{\"dependent_upon_4\":\"\",\"dependent_name_4\":\"\",\"client_dependentage_4\":\"\",\"relationship_4\":\"\",\"client_anticipitated_4\":\"\"},{\"dependent_upon_5\":\"\",\"dependent_name_5\":\"\",\"client_dependentage_5\":\"\",\"relationship_5\":\"\",\"client_anticipitated_5\":\"\"}]', 'Yes', 'Yes', 'No', 'No', '', '1', '2020-10-05 12:53:12'),
(51, '9263235596', 'Mr', '', '', '', 'Bharat', '', '', '', 'Agrawal', '', '', '', 'Wallington - Surrey - London', 'Wallington - Surrey - London', 'SM6 9BZ', 'SM6 9BZ', 'Male', 'Male', '11/01/1977', '03/02/1987', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '//', '//', '', '', '', '', '', '', '', 'per month', '', 'per month', '', '', '[{\"client_prevaddress1_1\":\"\",\"client_prevaddress1_2\":\"\",\"client_prevpostcode1_1\":\"\",\"client_prevpostcode1_2\":\"\",\"client_prevmovedindate1_1\":\"//\",\"client_prevmovedindate1_2\":\"//\",\"client_prevmovedoutdate1_1\":\"//\",\"client_prevmovedoutdate1_2\":\"//\",\"client_otherpreviousresidence1_1\":\"\",\"client_otherpreviousresidence1_2\":\"\"},{\"client_prevaddress2_1\":\"\",\"client_prevaddress2_2\":\"\",\"client_prevpostcode2_1\":\"\",\"client_prevpostcode2_2\":\"\",\"client_prevmovedindate2_1\":\"//\",\"client_prevmovedindate2_2\":\"//\",\"client_prevmovedoutdate2_1\":\"//\",\"client_prevmovedoutdate2_2\":\"//\",\"client_otherpreviousresidence2_1\":\"\",\"client_otherpreviousresidence2_2\":\"\"}]', '[{\"dependent_upon_1\":\"\",\"dependent_name_1\":\"\",\"client_dependentage_1\":\"\",\"relationship_1\":\"\",\"client_anticipitated_1\":\"\"},{\"dependent_upon_2\":\"\",\"dependent_name_2\":\"\",\"client_dependentage_2\":\"\",\"relationship_2\":\"\",\"client_anticipitated_2\":\"\"},{\"dependent_upon_3\":\"\",\"dependent_name_3\":\"\",\"client_dependentage_3\":\"\",\"relationship_3\":\"\",\"client_anticipitated_3\":\"\"},{\"dependent_upon_4\":\"\",\"dependent_name_4\":\"\",\"client_dependentage_4\":\"\",\"relationship_4\":\"\",\"client_anticipitated_4\":\"\"},{\"dependent_upon_5\":\"\",\"dependent_name_5\":\"\",\"client_dependentage_5\":\"\",\"relationship_5\":\"\",\"client_anticipitated_5\":\"\"}]', '', '', '', '', '', '', '2022-02-18 16:05:56'),
(52, '5024515514', 'Mr', '', 'Mrs', '', 'Amit', 'Nidhi', 'Kumar', '', 'Sharma', 'Kalra', '', '', '10, Berrycroft Drive', '10, Berrycroft Drive', 'TW11 4PQ', 'TW11 4PQ', 'Male', 'Female', '13/02/1980', '10/08/1982', '', '', '07747986986', '07757453453', '', '', 'amit.sharma@gmail.com', 'nidhikalra82@gmail.com', '', '', '', '', '', '', 'Married', 'Married', 'Spouse', '', 'Spouse', '', '40%', '40%', 'British', '', 'Other', 'Indian', 'United Kingdom', '', 'United Kingdom', '', '20/02/2020', '20/02/2020', 'Owner', '', 'Owner', '', 'Yes', '', '', 'per month', '', 'per month', '', '', '[{\"client_prevaddress1_1\":\"7, Windsor Street, Kent\",\"client_prevaddress1_2\":\"7, Windsor Street, Kent\",\"client_prevpostcode1_1\":\"TW11 4PQ\",\"client_prevpostcode1_2\":\"TW11 4PQ\",\"client_prevmovedindate1_1\":\"05/04/2017\",\"client_prevmovedindate1_2\":\"05/04/2017\",\"client_prevmovedoutdate1_1\":\"20/02/2020\",\"client_prevmovedoutdate1_2\":\"20/02/2020\",\"client_previousResidence1_1\":\"Tenant\",\"client_previousResidence1_2\":\"Tenant\",\"client_otherpreviousresidence1_1\":\"\",\"client_otherpreviousresidence1_2\":\"\"},{\"client_prevaddress2_1\":\"\",\"client_prevaddress2_2\":\"\",\"client_prevpostcode2_1\":\"\",\"client_prevpostcode2_2\":\"\",\"client_prevmovedindate2_1\":\"//\",\"client_prevmovedindate2_2\":\"//\",\"client_prevmovedoutdate2_1\":\"05/04/2017\",\"client_prevmovedoutdate2_2\":\"05/04/2017\",\"client_otherpreviousresidence2_1\":\"\",\"client_otherpreviousresidence2_2\":\"\"}]', '[{\"dependent_upon_1\":\"Joint\",\"dependent_name_1\":\"Kirti Sharma\",\"client_dependentage_1\":\"3\",\"relationship_1\":\"Child\",\"client_FinanciallyDependent_1\":\"Yes\",\"client_anticipitated_1\":\"18\"},{\"dependent_upon_2\":\"\",\"dependent_name_2\":\"\",\"client_dependentage_2\":\"\",\"relationship_2\":\"\",\"client_anticipitated_2\":\"\"},{\"dependent_upon_3\":\"\",\"dependent_name_3\":\"\",\"client_dependentage_3\":\"\",\"relationship_3\":\"\",\"client_anticipitated_3\":\"\"},{\"dependent_upon_4\":\"\",\"dependent_name_4\":\"\",\"client_dependentage_4\":\"\",\"relationship_4\":\"\",\"client_anticipitated_4\":\"\"},{\"dependent_upon_5\":\"\",\"dependent_name_5\":\"\",\"client_dependentage_5\":\"\",\"relationship_5\":\"\",\"client_anticipitated_5\":\"\"}]', 'Yes', 'Yes', 'No', 'No', '', '1', '2022-02-21 11:23:07'),
(53, '7094315960', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Male', '', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '//', '', '', '', '', '', '', '', '', 'per month', '', '', '', '', '[{\"client_prevaddress1_1\":\"\",\"client_prevpostcode1_1\":\"\",\"client_prevmovedindate1_1\":\"//\",\"client_prevmovedindate1_2\":\"undefined/undefined/undefined\",\"client_prevmovedoutdate1_1\":\"//\",\"client_prevmovedoutdate1_2\":\"undefined/undefined/undefined\",\"client_otherpreviousresidence1_1\":\"\"},{\"client_prevaddress2_1\":\"\",\"client_prevpostcode2_1\":\"\",\"client_prevmovedindate2_1\":\"//\",\"client_prevmovedindate2_2\":\"undefined/undefined/undefined\",\"client_prevmovedoutdate2_1\":\"//\",\"client_prevmovedoutdate2_2\":\"undefined/undefined/undefined\",\"client_otherpreviousresidence2_1\":\"\"}]', '[{\"dependent_upon_1\":\"\",\"dependent_name_1\":\"\",\"client_dependentage_1\":\"\",\"relationship_1\":\"\",\"client_anticipitated_1\":\"\"},{\"dependent_upon_2\":\"\",\"dependent_name_2\":\"\",\"client_dependentage_2\":\"\",\"relationship_2\":\"\",\"client_anticipitated_2\":\"\"},{\"dependent_upon_3\":\"\",\"dependent_name_3\":\"\",\"client_dependentage_3\":\"\",\"relationship_3\":\"\",\"client_anticipitated_3\":\"\"},{\"dependent_upon_4\":\"\",\"dependent_name_4\":\"\",\"client_dependentage_4\":\"\",\"relationship_4\":\"\",\"client_anticipitated_4\":\"\"},{\"dependent_upon_5\":\"\",\"dependent_name_5\":\"\",\"client_dependentage_5\":\"\",\"relationship_5\":\"\",\"client_anticipitated_5\":\"\"}]', '', '', '', '', '', '', '2022-03-04 08:49:28'),
(54, '6881902160', 'Mr', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Male', '', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '//', '', '', '', '', '', '', '', '', 'per month', '', '', '', '', '[{\"client_prevaddress1_1\":\"\",\"client_prevpostcode1_1\":\"\",\"client_prevmovedindate1_1\":\"//\",\"client_prevmovedindate1_2\":\"undefined/undefined/undefined\",\"client_prevmovedoutdate1_1\":\"//\",\"client_prevmovedoutdate1_2\":\"undefined/undefined/undefined\",\"client_otherpreviousresidence1_1\":\"\"},{\"client_prevaddress2_1\":\"\",\"client_prevpostcode2_1\":\"\",\"client_prevmovedindate2_1\":\"//\",\"client_prevmovedindate2_2\":\"undefined/undefined/undefined\",\"client_prevmovedoutdate2_1\":\"//\",\"client_prevmovedoutdate2_2\":\"undefined/undefined/undefined\",\"client_otherpreviousresidence2_1\":\"\"}]', '[{\"dependent_upon_1\":\"\",\"dependent_name_1\":\"\",\"client_dependentage_1\":\"\",\"relationship_1\":\"\",\"client_anticipitated_1\":\"\"},{\"dependent_upon_2\":\"\",\"dependent_name_2\":\"\",\"client_dependentage_2\":\"\",\"relationship_2\":\"\",\"client_anticipitated_2\":\"\"},{\"dependent_upon_3\":\"\",\"dependent_name_3\":\"\",\"client_dependentage_3\":\"\",\"relationship_3\":\"\",\"client_anticipitated_3\":\"\"},{\"dependent_upon_4\":\"\",\"dependent_name_4\":\"\",\"client_dependentage_4\":\"\",\"relationship_4\":\"\",\"client_anticipitated_4\":\"\"},{\"dependent_upon_5\":\"\",\"dependent_name_5\":\"\",\"client_dependentage_5\":\"\",\"relationship_5\":\"\",\"client_anticipitated_5\":\"\"}]', '', '', '', '', '', '', '2022-03-04 08:58:18'),
(55, '5256968798', 'Mr', '', '', '', 'Hemendra singh', '', 'a', '', 'rajput', '', '', '', 'vasundhra enclave delhi', '', '110096', '', 'Male', '', '03/11/1998', '', '', '', '78459687557', '', '', '', 'abc@gmail.com', '', 'Telephone', '', '', '', '12 am ', '', 'Single', '', 'Father', '', '', '', '0%', '', 'Other', 'Indian', '', '', 'Other', 'India', '', '', '03/03/2004', '', 'Tenant', '', '', '', 'Yes', '', '15000', 'per month', '', '', 'Yes', '', '[{\"client_prevaddress1_1\":\"\",\"client_prevpostcode1_1\":\"\",\"client_prevmovedindate1_1\":\"//\",\"client_prevmovedindate1_2\":\"undefined/undefined/undefined\",\"client_prevmovedoutdate1_1\":\"//\",\"client_prevmovedoutdate1_2\":\"undefined/undefined/undefined\",\"client_otherpreviousresidence1_1\":\"\"},{\"client_prevaddress2_1\":\"\",\"client_prevpostcode2_1\":\"\",\"client_prevmovedindate2_1\":\"//\",\"client_prevmovedindate2_2\":\"undefined/undefined/undefined\",\"client_prevmovedoutdate2_1\":\"//\",\"client_prevmovedoutdate2_2\":\"undefined/undefined/undefined\",\"client_otherpreviousresidence2_1\":\"\"}]', '[{\"dependent_upon_1\":\"Joint,CL2\",\"dependent_name_1\":\"\",\"client_dependentage_1\":\"01-04-1998\",\"relationship_1\":\"b\",\"client_FinanciallyDependent_1\":\"Yes\",\"client_anticipitated_1\":\"20\"},{\"dependent_upon_2\":\"\",\"dependent_name_2\":\"\",\"client_dependentage_2\":\"\",\"relationship_2\":\"\",\"client_anticipitated_2\":\"\"},{\"dependent_upon_3\":\"\",\"dependent_name_3\":\"\",\"client_dependentage_3\":\"\",\"relationship_3\":\"\",\"client_anticipitated_3\":\"\"},{\"dependent_upon_4\":\"\",\"dependent_name_4\":\"\",\"client_dependentage_4\":\"\",\"relationship_4\":\"\",\"client_anticipitated_4\":\"\"},{\"dependent_upon_5\":\"\",\"dependent_name_5\":\"\",\"client_dependentage_5\":\"\",\"relationship_5\":\"\",\"client_anticipitated_5\":\"\"}]', 'Yes', '', 'Yes', '', 'p9o9opuiopio', '1', '2022-03-04 09:12:20'),
(56, '5435559286', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Male', 'Male', '//', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '//', '//', '', '', '', '', '', '', '', 'per month', '', 'per month', '', '', '[{\"client_prevaddress1_1\":\"\",\"client_prevaddress1_2\":\"\",\"client_prevpostcode1_1\":\"\",\"client_prevpostcode1_2\":\"\",\"client_prevmovedindate1_1\":\"//\",\"client_prevmovedindate1_2\":\"//\",\"client_prevmovedoutdate1_1\":\"//\",\"client_prevmovedoutdate1_2\":\"//\",\"client_otherpreviousresidence1_1\":\"\",\"client_otherpreviousresidence1_2\":\"\"},{\"client_prevaddress2_1\":\"\",\"client_prevaddress2_2\":\"\",\"client_prevpostcode2_1\":\"\",\"client_prevpostcode2_2\":\"\",\"client_prevmovedindate2_1\":\"//\",\"client_prevmovedindate2_2\":\"//\",\"client_prevmovedoutdate2_1\":\"//\",\"client_prevmovedoutdate2_2\":\"//\",\"client_otherpreviousresidence2_1\":\"\",\"client_otherpreviousresidence2_2\":\"\"}]', '[{\"dependent_upon_1\":\"\",\"dependent_name_1\":\"\",\"client_dependentage_1\":\"\",\"relationship_1\":\"\",\"client_anticipitated_1\":\"\"},{\"dependent_upon_2\":\"\",\"dependent_name_2\":\"\",\"client_dependentage_2\":\"\",\"relationship_2\":\"\",\"client_anticipitated_2\":\"\"},{\"dependent_upon_3\":\"\",\"dependent_name_3\":\"\",\"client_dependentage_3\":\"\",\"relationship_3\":\"\",\"client_anticipitated_3\":\"\"},{\"dependent_upon_4\":\"\",\"dependent_name_4\":\"\",\"client_dependentage_4\":\"\",\"relationship_4\":\"\",\"client_anticipitated_4\":\"\"},{\"dependent_upon_5\":\"\",\"dependent_name_5\":\"\",\"client_dependentage_5\":\"\",\"relationship_5\":\"\",\"client_anticipitated_5\":\"\"}]', '', '', '', '', '', '', '2022-03-04 10:27:38'),
(57, '6539798179', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Male', '', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '//', '', '', '', '', '', '', '', '', 'per month', '', '', '', '', '[{\"client_prevaddress1_1\":\"\",\"client_prevpostcode1_1\":\"\",\"client_prevmovedindate1_1\":\"//\",\"client_prevmovedindate1_2\":\"undefined/undefined/undefined\",\"client_prevmovedoutdate1_1\":\"//\",\"client_prevmovedoutdate1_2\":\"undefined/undefined/undefined\",\"client_otherpreviousresidence1_1\":\"\"},{\"client_prevaddress2_1\":\"\",\"client_prevpostcode2_1\":\"\",\"client_prevmovedindate2_1\":\"//\",\"client_prevmovedindate2_2\":\"undefined/undefined/undefined\",\"client_prevmovedoutdate2_1\":\"//\",\"client_prevmovedoutdate2_2\":\"undefined/undefined/undefined\",\"client_otherpreviousresidence2_1\":\"\"}]', '[{\"dependent_upon_1\":\"\",\"dependent_name_1\":\"\",\"client_dependentage_1\":\"\",\"relationship_1\":\"\",\"client_anticipitated_1\":\"\"},{\"dependent_upon_2\":\"\",\"dependent_name_2\":\"\",\"client_dependentage_2\":\"\",\"relationship_2\":\"\",\"client_anticipitated_2\":\"\"},{\"dependent_upon_3\":\"\",\"dependent_name_3\":\"\",\"client_dependentage_3\":\"\",\"relationship_3\":\"\",\"client_anticipitated_3\":\"\"},{\"dependent_upon_4\":\"\",\"dependent_name_4\":\"\",\"client_dependentage_4\":\"\",\"relationship_4\":\"\",\"client_anticipitated_4\":\"\"},{\"dependent_upon_5\":\"\",\"dependent_name_5\":\"\",\"client_dependentage_5\":\"\",\"relationship_5\":\"\",\"client_anticipitated_5\":\"\"}]', '', '', '', '', '', '', '2022-03-05 06:58:05'),
(58, '9498516006', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Male', 'Male', '//', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '//', '//', '', '', '', '', '', '', '', 'per month', '', 'per month', '', '', '[{\"client_prevaddress1_1\":\"\",\"client_prevaddress1_2\":\"\",\"client_prevpostcode1_1\":\"\",\"client_prevpostcode1_2\":\"\",\"client_prevmovedindate1_1\":\"//\",\"client_prevmovedindate1_2\":\"//\",\"client_prevmovedoutdate1_1\":\"//\",\"client_prevmovedoutdate1_2\":\"//\",\"client_otherpreviousresidence1_1\":\"\",\"client_otherpreviousresidence1_2\":\"\"},{\"client_prevaddress2_1\":\"\",\"client_prevaddress2_2\":\"\",\"client_prevpostcode2_1\":\"\",\"client_prevpostcode2_2\":\"\",\"client_prevmovedindate2_1\":\"//\",\"client_prevmovedindate2_2\":\"//\",\"client_prevmovedoutdate2_1\":\"//\",\"client_prevmovedoutdate2_2\":\"//\",\"client_otherpreviousresidence2_1\":\"\",\"client_otherpreviousresidence2_2\":\"\"}]', '[{\"dependent_upon_1\":\"\",\"dependent_name_1\":\"\",\"client_dependentage_1\":\"\",\"relationship_1\":\"\",\"client_anticipitated_1\":\"\"},{\"dependent_upon_2\":\"\",\"dependent_name_2\":\"\",\"client_dependentage_2\":\"\",\"relationship_2\":\"\",\"client_anticipitated_2\":\"\"},{\"dependent_upon_3\":\"\",\"dependent_name_3\":\"\",\"client_dependentage_3\":\"\",\"relationship_3\":\"\",\"client_anticipitated_3\":\"\"},{\"dependent_upon_4\":\"\",\"dependent_name_4\":\"\",\"client_dependentage_4\":\"\",\"relationship_4\":\"\",\"client_anticipitated_4\":\"\"},{\"dependent_upon_5\":\"\",\"dependent_name_5\":\"\",\"client_dependentage_5\":\"\",\"relationship_5\":\"\",\"client_anticipitated_5\":\"\"}]', '', '', '', '', '', '', '2022-03-05 07:18:13'),
(59, '2288584753', 'Mr', '', '', '', 'ytrytry', '', 'ytrytry', '', 'yrt', '', 'ytry', '', 'yytr  ytr yt y ty y tr', '', '110058', '', 'Male', '', '01/03/1989', '', '', '', '09717265348', '', '', '', 'sasa@sdsd.com', '', 'Telephone', '', '', '', '', '', 'Single', '', '', '', '', '', '20%', '', 'Other', 'Argentine', '', '', 'Other', 'Argentina', '', '', '//', '', '', '', '', '', '', '', '', 'per month', '', '', '', '', '[{\"client_prevaddress1_1\":\"A-1/175 Main Najafgarh Rd\\nBlock A1, second floor\",\"client_prevpostcode1_1\":\"\",\"client_prevmovedindate1_1\":\"//\",\"client_prevmovedindate1_2\":\"undefined/undefined/undefined\",\"client_prevmovedoutdate1_1\":\"//\",\"client_prevmovedoutdate1_2\":\"undefined/undefined/undefined\",\"client_otherpreviousresidence1_1\":\"\"},{\"client_prevaddress2_1\":\"\",\"client_prevpostcode2_1\":\"\",\"client_prevmovedindate2_1\":\"//\",\"client_prevmovedindate2_2\":\"undefined/undefined/undefined\",\"client_prevmovedoutdate2_1\":\"//\",\"client_prevmovedoutdate2_2\":\"undefined/undefined/undefined\",\"client_otherpreviousresidence2_1\":\"\"}]', '[{\"dependent_upon_1\":\"\",\"dependent_name_1\":\"\",\"client_dependentage_1\":\"\",\"relationship_1\":\"\",\"client_FinanciallyDependent_1\":\"Yes\",\"client_anticipitated_1\":\"\"},{\"dependent_upon_2\":\"\",\"dependent_name_2\":\"\",\"client_dependentage_2\":\"\",\"relationship_2\":\"\",\"client_FinanciallyDependent_2\":\"Yes\",\"client_anticipitated_2\":\"\"},{\"dependent_upon_3\":\"\",\"dependent_name_3\":\"\",\"client_dependentage_3\":\"\",\"relationship_3\":\"\",\"client_FinanciallyDependent_3\":\"Yes\",\"client_anticipitated_3\":\"\"},{\"dependent_upon_4\":\"\",\"dependent_name_4\":\"\",\"client_dependentage_4\":\"\",\"relationship_4\":\"\",\"client_FinanciallyDependent_4\":\"Yes\",\"client_anticipitated_4\":\"\"},{\"dependent_upon_5\":\"\",\"dependent_name_5\":\"\",\"client_dependentage_5\":\"\",\"relationship_5\":\"\",\"client_FinanciallyDependent_5\":\"Yes\",\"client_anticipitated_5\":\"\"}]', 'Yes', '', 'Yes', '', 'ewrewrewrewr', '', '2022-03-05 07:24:18');
INSERT INTO `personal_detail` (`id`, `form_id`, `client_title_1`, `client_othertitle_1`, `client_title_2`, `client_othertitle_2`, `client_firstname_1`, `client_firstname_2`, `client_middlename_1`, `client_middlename_2`, `client_surname_1`, `client_surname_2`, `client_maidenname_1`, `client_maidenname_2`, `client_address_1`, `client_address_2`, `client_postcode_1`, `client_postcode_2`, `client_gender_1`, `client_gender_2`, `client_dob_1`, `client_dob_2`, `client_hometel_1`, `client_hometel_2`, `client_mobile_1`, `client_mobile_2`, `client_worktel_1`, `client_worktel_2`, `client_email_1`, `client_email_2`, `client_contactmethod_1`, `client_othercontactmethod_1`, `client_contactmethod_2`, `client_othercontactmethod_2`, `client_contacttime_1`, `client_contacttime_2`, `client_marital_1`, `client_marital_2`, `client_relationship_1`, `client_otherrelationship_1`, `client_relationship_2`, `client_otherrelationship_2`, `client_taxrate_1`, `client_taxrate_2`, `client_nationality_1`, `client_othernationality_1`, `client_nationality_2`, `client_othernationality_2`, `client_country_1`, `client_othercountry_1`, `client_country_2`, `client_othercountry_2`, `client_currentmoveddate_1`, `client_currentmoveddate_2`, `client_residentialstatus_1`, `client_otherresidentialstatus_1`, `client_residentialstatus_2`, `client_otherresidentialstatus_2`, `client_electoralroll_1`, `client_electoralroll_2`, `client_currentrenting_1`, `client_currentrentingtype_1`, `client_currentrenting_2`, `client_currentrentingtype_2`, `client_rentalaccom_1`, `client_rentalaccom_2`, `client_previousaddress`, `client_childrensection`, `client_healthstatus_1`, `client_healthstatus_2`, `client_religiousbelief_1`, `client_religiousbelief_2`, `client_additionaldetail`, `form_status`, `created_at`) VALUES
(60, '4327360031', 'Mr', '', 'Mr', '', 'ytry', 'ytry', 'yt', 'ytry', 'ytr', 'ytr', 'ytry', 'ytryr', 'ytrytr', 'ytrytry', '110058', '112233', 'Male', 'Male', '01/03/1990', '01/03/1996', '', '', '', '', '', '', '', '', 'Letter', '', 'Letter', '', '', '', 'Single', 'Single', 'Spouse', '', 'Spouse', '', '20%', '20%', 'Other', 'Austrian', 'Other', 'Azerbaijani, Azeri', 'Other', 'Aruba', 'Other', 'Argentina', '01/03/2021', '//', 'Owner', '', '', '', 'Yes', '', '7000', 'per month', '8000', 'per month', 'Yes', 'Yes', '[{\"client_prevaddress1_1\":\"gdf\\ng\\nfdgf\\nd\",\"client_prevaddress1_2\":\"gfdgdgfd gdfgfdgfd gfdgd\\ngfdgfd\",\"client_prevpostcode1_1\":\"110058\",\"client_prevpostcode1_2\":\"110058\",\"client_prevmovedindate1_1\":\"01/12/2019\",\"client_prevmovedindate1_2\":\"//\",\"client_prevmovedoutdate1_1\":\"01/03/2021\",\"client_prevmovedoutdate1_2\":\"//\",\"client_otherpreviousresidence1_1\":\"\",\"client_otherpreviousresidence1_2\":\"\",\"client_prelectoralRoll1_2\":\"Yes\"},{\"client_prevaddress2_1\":\"try\",\"client_prevaddress2_2\":\"yrtytryrty\",\"client_prevpostcode2_1\":\"1155511\",\"client_prevpostcode2_2\":\"661155\",\"client_prevmovedindate2_1\":\"//\",\"client_prevmovedindate2_2\":\"//\",\"client_prevmovedoutdate2_1\":\"01/12/2019\",\"client_prevmovedoutdate2_2\":\"//\",\"client_otherpreviousresidence2_1\":\"\",\"client_otherpreviousresidence2_2\":\"\"}]', '[{\"dependent_upon_1\":\"\",\"dependent_name_1\":\"\",\"client_dependentage_1\":\"\",\"relationship_1\":\"\",\"client_FinanciallyDependent_1\":\"Yes\",\"client_anticipitated_1\":\"2\"},{\"dependent_upon_2\":\"\",\"dependent_name_2\":\"\",\"client_dependentage_2\":\"\",\"relationship_2\":\"\",\"client_FinanciallyDependent_2\":\"Yes\",\"client_anticipitated_2\":\"2\"},{\"dependent_upon_3\":\"\",\"dependent_name_3\":\"\",\"client_dependentage_3\":\"\",\"relationship_3\":\"\",\"client_FinanciallyDependent_3\":\"Yes\",\"client_anticipitated_3\":\"2\"},{\"dependent_upon_4\":\"\",\"dependent_name_4\":\"\",\"client_dependentage_4\":\"\",\"relationship_4\":\"\",\"client_FinanciallyDependent_4\":\"Yes\",\"client_anticipitated_4\":\"2\"},{\"dependent_upon_5\":\"\",\"dependent_name_5\":\"\",\"client_dependentage_5\":\"\",\"relationship_5\":\"\",\"client_FinanciallyDependent_5\":\"Yes\",\"client_anticipitated_5\":\"2\"}]', 'Yes', 'Yes', 'Yes', 'Yes', 'rytuytutyuytu u ytu ytu ', '1', '2022-03-05 08:41:25'),
(61, '4866404820', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Male', '', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '//', '', '', '', '', '', '', '', '', 'per month', '', '', '', '', '[{\"client_prevaddress1_1\":\"\",\"client_prevpostcode1_1\":\"\",\"client_prevmovedindate1_1\":\"//\",\"client_prevmovedindate1_2\":\"undefined/undefined/undefined\",\"client_prevmovedoutdate1_1\":\"//\",\"client_prevmovedoutdate1_2\":\"undefined/undefined/undefined\",\"client_otherpreviousresidence1_1\":\"\"},{\"client_prevaddress2_1\":\"\",\"client_prevpostcode2_1\":\"\",\"client_prevmovedindate2_1\":\"//\",\"client_prevmovedindate2_2\":\"undefined/undefined/undefined\",\"client_prevmovedoutdate2_1\":\"//\",\"client_prevmovedoutdate2_2\":\"undefined/undefined/undefined\",\"client_otherpreviousresidence2_1\":\"\"}]', '[{\"dependent_upon_1\":\"\",\"dependent_name_1\":\"\",\"client_dependentage_1\":\"\",\"relationship_1\":\"\",\"client_anticipitated_1\":\"\"},{\"dependent_upon_2\":\"\",\"dependent_name_2\":\"\",\"client_dependentage_2\":\"\",\"relationship_2\":\"\",\"client_anticipitated_2\":\"\"},{\"dependent_upon_3\":\"\",\"dependent_name_3\":\"\",\"client_dependentage_3\":\"\",\"relationship_3\":\"\",\"client_anticipitated_3\":\"\"},{\"dependent_upon_4\":\"\",\"dependent_name_4\":\"\",\"client_dependentage_4\":\"\",\"relationship_4\":\"\",\"client_anticipitated_4\":\"\"},{\"dependent_upon_5\":\"\",\"dependent_name_5\":\"\",\"client_dependentage_5\":\"\",\"relationship_5\":\"\",\"client_anticipitated_5\":\"\"}]', '', '', '', '', '', '', '2022-03-05 08:45:02');

-- --------------------------------------------------------

--
-- Table structure for table `self_employed`
--

CREATE TABLE `self_employed` (
  `id` int(11) NOT NULL,
  `form_id` varchar(200) NOT NULL,
  `client_businessname_1` varchar(200) NOT NULL,
  `client_businessname_2` varchar(200) NOT NULL,
  `client_businessaddress_1` varchar(200) NOT NULL,
  `client_businessaddress_2` varchar(200) NOT NULL,
  `client_businesspostcode_1` varchar(200) NOT NULL,
  `client_businesspostcode_2` varchar(200) NOT NULL,
  `client_businessphone_1` varchar(200) NOT NULL,
  `client_businessphone_2` varchar(200) NOT NULL,
  `client_businessemail_1` varchar(200) NOT NULL,
  `client_businessemail_2` varchar(200) NOT NULL,
  `client_businesstype_1` varchar(200) NOT NULL,
  `client_businesstype_2` varchar(200) NOT NULL,
  `client_businessoccupation_1` varchar(200) NOT NULL,
  `client_businessoccupation_2` varchar(200) NOT NULL,
  `client_businessdate_1` varchar(200) NOT NULL,
  `client_businessdate_2` varchar(200) NOT NULL,
  `client_businessstatus_1` varchar(200) NOT NULL,
  `client_businessstatus_2` varchar(200) NOT NULL,
  `client_compregno_1` varchar(200) NOT NULL,
  `client_compregno_2` varchar(200) NOT NULL,
  `client_businessper_1` varchar(200) NOT NULL,
  `client_businessper_2` varchar(200) NOT NULL,
  `client_contractstatus_1` varchar(200) NOT NULL,
  `client_contractstatus_2` varchar(200) NOT NULL,
  `client_accountantstatus_1` varchar(200) NOT NULL,
  `client_accountantstatus_2` varchar(200) NOT NULL,
  `client_accountyear_1` varchar(200) NOT NULL,
  `client_accountyear_2` varchar(200) NOT NULL,
  `client_yearend1_1` varchar(200) NOT NULL,
  `client_yearend1_2` varchar(200) NOT NULL,
  `client_netprofit1_1` varchar(200) NOT NULL,
  `client_netprofit1_2` varchar(200) NOT NULL,
  `client_netdividend1_1` varchar(200) NOT NULL,
  `client_netdividend1_2` varchar(200) NOT NULL,
  `client_renumeration1_1` varchar(200) NOT NULL,
  `client_renumeration1_2` varchar(200) NOT NULL,
  `client_yearend2_1` varchar(200) NOT NULL,
  `client_yearend2_2` varchar(200) NOT NULL,
  `client_netprofit2_1` varchar(200) NOT NULL,
  `client_netprofit2_2` varchar(200) NOT NULL,
  `client_netdividend2_1` varchar(200) NOT NULL,
  `client_netdividend2_2` varchar(200) NOT NULL,
  `client_renumeration2_1` varchar(200) NOT NULL,
  `client_renumeration2_2` varchar(200) NOT NULL,
  `client_yearend3_1` varchar(200) NOT NULL,
  `client_yearend3_2` varchar(200) NOT NULL,
  `client_netprofit3_1` varchar(200) NOT NULL,
  `client_netprofit3_2` varchar(200) NOT NULL,
  `client_netdividend3_1` varchar(200) NOT NULL,
  `client_netdividend3_2` varchar(200) NOT NULL,
  `client_renumeration3_1` varchar(200) NOT NULL,
  `client_renumeration3_2` varchar(200) NOT NULL,
  `client_totalincome_1` varchar(200) NOT NULL,
  `client_totalincome_2` varchar(200) NOT NULL,
  `client_totalnetincome_1` varchar(200) NOT NULL,
  `client_totalnetincome_2` varchar(200) NOT NULL,
  `client_empcircumstatus_1` varchar(200) NOT NULL,
  `client_empcircumstatus_2` varchar(200) NOT NULL,
  `client_additionalnotes` varchar(1000) NOT NULL,
  `form_status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `self_employed`
--

INSERT INTO `self_employed` (`id`, `form_id`, `client_businessname_1`, `client_businessname_2`, `client_businessaddress_1`, `client_businessaddress_2`, `client_businesspostcode_1`, `client_businesspostcode_2`, `client_businessphone_1`, `client_businessphone_2`, `client_businessemail_1`, `client_businessemail_2`, `client_businesstype_1`, `client_businesstype_2`, `client_businessoccupation_1`, `client_businessoccupation_2`, `client_businessdate_1`, `client_businessdate_2`, `client_businessstatus_1`, `client_businessstatus_2`, `client_compregno_1`, `client_compregno_2`, `client_businessper_1`, `client_businessper_2`, `client_contractstatus_1`, `client_contractstatus_2`, `client_accountantstatus_1`, `client_accountantstatus_2`, `client_accountyear_1`, `client_accountyear_2`, `client_yearend1_1`, `client_yearend1_2`, `client_netprofit1_1`, `client_netprofit1_2`, `client_netdividend1_1`, `client_netdividend1_2`, `client_renumeration1_1`, `client_renumeration1_2`, `client_yearend2_1`, `client_yearend2_2`, `client_netprofit2_1`, `client_netprofit2_2`, `client_netdividend2_1`, `client_netdividend2_2`, `client_renumeration2_1`, `client_renumeration2_2`, `client_yearend3_1`, `client_yearend3_2`, `client_netprofit3_1`, `client_netprofit3_2`, `client_netdividend3_1`, `client_netdividend3_2`, `client_renumeration3_1`, `client_renumeration3_2`, `client_totalincome_1`, `client_totalincome_2`, `client_totalnetincome_1`, `client_totalnetincome_2`, `client_empcircumstatus_1`, `client_empcircumstatus_2`, `client_additionalnotes`, `form_status`, `created_at`) VALUES
(2, '3594043122', 'ABCD Company', 'ABCD Company', 'kjjk', 'kjjk', 'QW55YZ', 'QW55YZ', '12345678911', '12345678911', 'xyz@gmail.com', 'xyz@gmail.com', 'xyz', 'xyz', 'owner', 'owner', '14/07/2017', '14/07/2017', 'Partnership', 'Partnership', '85296314789', '85296314789', '45', '55', 'No', 'No', 'Yes', 'Yes', '1', '1', '31/03/2018', '31/03/2018', '10000', '10000', '1000', '1000', '1000', '1000', '//', '//', '', '', '', '', '', '', '//', '//', '', '', '', '', '', '', '12,000.00', '12,000.00', '1000', '1000', 'No', 'No', '', 0, '2018-07-22 12:08:00'),
(3, '9404682413', '', 'Cakes 4 u', '', '11 Address Line 1,\r\nAddress Line 2', '', 'AB12CD', '', '', '', '', '', '', '', '', '//', '//', '', 'Sole Trader', '', '12345', '', '100', '', 'No', '', 'No', '', '', '//', '//', '', '', '', '', '', '', '//', '//', '', '', '', '', '', '', '//', '//', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2020-10-05 13:04:44'),
(4, '5024515514', 'My Consultacy Limited', '', '10, Berrycroft Drive', '', 'TW11 4PQ', '', '', '', 'amit.sharma@gmail.com', '', 'IT Consultancy', 'IT Consultancy', 'IT Contractor', '', '24/11/2016', '24/11/2016', 'Limited Company', '', '1234432', '', '75', '', 'Yes', '', 'Yes', '', '2', '', '31/01/2022', '//', '110,000', '', '40,000', '', '15,000', '', '31/01/2021', '//', '100,000', '', '35,000', '', '12,000', '', '//', '//', '', '', '', '', '', '', '112,000.00', '', '8746', '', 'No', '', '', 1, '2022-02-21 11:28:45'),
(5, '6539798179', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '//', '//', '', '', '', '', '', '', '', '', '', '', '', '', '//', 'undefined/undefined/undefined', '', '', '', '', '', '', '//', 'undefined/undefined/undefined', '', '', '', '', '', '', '//', 'undefined/undefined/undefined', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '2022-03-05 07:03:10'),
(6, '9498516006', 'tyryry', '', 'trytryy', '', '110058', '', '09717265348', '', 'ggfd@fdfdf.vom', '', 'ytrytry', '', 'tryrtytryt', '', '06/03/2022', '06/03/2022', 'Sole Trader', '', '456rtytyytr', '', '7', '', 'Yes', '', 'No', '', 'Delhi', '', '09/03/2022', '//', '654,656', '', '654', '', '654', '', '//', '//', '6,546', '', '6,546', '', '654', '', '//', '//', '6,546', '', '6,546', '', '6,546,546', '', '7,229,348.00', '', '654', '', 'Yes', '', 'rytytrytrytr', 0, '2022-03-05 07:22:23'),
(7, '4327360031', 'tyryry', 'ytrytyrt', 'rtyrty', 'yrtyrty', '110058', '110058', '', '', '', '', 'ytrytry', 'ytrytry', 'tryrtytryt', 'yutuytuty', '01/03/2022', '01/03/2022', 'Sole Trader', 'Sole Trader', '456rtytyytr', '677657576', '7', '7', 'Yes', 'Yes', 'Yes', 'No', '', '', '01/03/2022', '01/03/2022', '', '', '', '', '', '', '01/01/2021', '01/03/2021', '', '', '', '', '', '', '01/03/2020', '01/03/2020', '', '', '', '', '', '', '', '', '654', '776', 'Yes', 'Yes', 'uyutuytuytuytuytuyt7657567', 1, '2022-03-05 08:41:42');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `added_by` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `email`, `password`, `type`, `phone`, `status`, `added_by`, `created_at`) VALUES
(1, 'Kopal Tandon', 'kopaltandon', 'tandonkopal01@gmail.com', 'cfd8651e04c62490757716e38579f3df', 'admin', '7651889703', 'true', '', '2018-05-13 01:49:22'),
(2, 'Sajal Suraj', 'sajalsuraj', 'sajal.suraj@gmail.com', '2f665b6cc221c745d8177759c33f76b0', 'admin', '8210907970', 'true', '', '2018-05-13 01:49:22'),
(4, 'Surya Ranjan', 'suryaranjan', 'suryaranjan12@gmail.com', 'f62ca177cbf58a484b4066ba168d5202', 'client', '9876543211', 'false', '', '2018-05-13 04:25:30'),
(8, 'h', '', 'dg@1234', '70b4269b412a8af42b1f7b0d26eceff2', 'subadmin', '9985644585', 'false', '', '2022-03-04 10:33:17'),
(9, 'g', '', 'rgd@123', '3e0cd7dbf477f6da9831acd7c1d617bc', 'client', '1245635652', 'false', '', '2022-03-04 10:34:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `additional_details`
--
ALTER TABLE `additional_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appendix`
--
ALTER TABLE `appendix`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `credit_history`
--
ALTER TABLE `credit_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `declaration`
--
ALTER TABLE `declaration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employment_detail`
--
ALTER TABLE `employment_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenditure_budget`
--
ALTER TABLE `expenditure_budget`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ex_property_mortgage`
--
ALTER TABLE `ex_property_mortgage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `financial`
--
ALTER TABLE `financial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form_detail`
--
ALTER TABLE `form_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mortgage_loan`
--
ALTER TABLE `mortgage_loan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mortgage_needs`
--
ALTER TABLE `mortgage_needs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mortgage_property`
--
ALTER TABLE `mortgage_property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other-income`
--
ALTER TABLE `other-income`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_detail`
--
ALTER TABLE `personal_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `self_employed`
--
ALTER TABLE `self_employed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `additional_details`
--
ALTER TABLE `additional_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `appendix`
--
ALTER TABLE `appendix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `credit_history`
--
ALTER TABLE `credit_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `declaration`
--
ALTER TABLE `declaration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `employment_detail`
--
ALTER TABLE `employment_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `expenditure_budget`
--
ALTER TABLE `expenditure_budget`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `ex_property_mortgage`
--
ALTER TABLE `ex_property_mortgage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `financial`
--
ALTER TABLE `financial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `form_detail`
--
ALTER TABLE `form_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `mortgage_loan`
--
ALTER TABLE `mortgage_loan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `mortgage_needs`
--
ALTER TABLE `mortgage_needs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `mortgage_property`
--
ALTER TABLE `mortgage_property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `other-income`
--
ALTER TABLE `other-income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_detail`
--
ALTER TABLE `personal_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `self_employed`
--
ALTER TABLE `self_employed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
